class CustomAjax {
    constructor() {
        this.csrfToken = this.getCsrfToken();
        $.ajaxSetup({
            headers: {
                'X-CSRF-Token': this.csrfToken,
            },
            statusCode: {
                401: function () {
                    window.location.href='/login'
                    // Handle logout or redirection to the login page
                    console.log('Logout or redirect to login page');
                },
                419: function () {
                    window.location.reload;
                    // Handle logout or redirection to the login page
                    console.log('Logout or redirect to login page');
                },
            },
        });
    }

    getCsrfToken() {
        // Your logic to fetch the CSRF token
        // For example, if using Laravel, you might find it in a meta tag
        const metaTag = $('meta[name="csrf-token"]');
        return metaTag.length ? metaTag.attr('content') : null;
    }

    get(url, successCallback, errorCallback) {
        $.ajax({
            url: url,
            type: 'GET',
            headers: {
                'X-CSRF-Token': this.csrfToken,
            },
            success: successCallback,
            error: errorCallback,
        });
    }

    post(url, data, successCallback, errorCallback, options = {}) {
        $.ajax({
            url: url,
            type: 'POST',
            data: data,
            xhr: function () {
                var xhr = new window.XMLHttpRequest();
                // Track progress
                xhr.upload.addEventListener("progress", function (evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = evt.loaded / evt.total;
                        $('#progress-container').show();  // Show the progress bar container
                        $('#progress-bar').css('width', percentComplete + '%'); // You can update a progress bar here
                    }
                }, false);
                return xhr;
            },
            beforeSend: function () {
                $('#loading').show();
                $('#progress-container').show(); // Ensure progress bar is visible

            },
            complete: function () {
                $("#loading").hide();
                $("#progress-container").hide(); // Hide progress bar when done
                $("#progress-bar").css('width', '0');
            },
            contentType: options.contentType ?? false,  // Use false for FormData
            processData: options.processData ?? false,  // False when sending FormData
            headers: {
                'X-CSRF-Token': this.csrfToken,  // CSRF Token for Laravel
            },
            success: successCallback,
            error: errorCallback,
            async: true,
            cache: false,
            timeout: 60000  // 1-minute timeout
        });
    }


    put(url, data, successCallback, errorCallback, options = {}) {
        $.ajax({
            url: url,
            type: 'PUT',
            data: data,
            contentType: options.contentType ,
            processData: options.processData ,
            headers: {
                'X-CSRF-Token': this.csrfToken,
            },
            success: successCallback,
            error: errorCallback,
        });
    }


    delete(url, data={}, successCallback, errorCallback) {
        $.ajax({
            url: url,
            type: 'DELETE',
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content'), // Laravel CSRF Token
            },
            data: JSON.stringify(data), // Send data as JSON
            success: successCallback,
            error: errorCallback,
            contentType: 'application/json', // Set content type to JSON
        });
    }

    Alert(msg, type) {
        Swal.fire({
            title: type.charAt(0).toUpperCase() + type.slice(1),
            text: msg,
            icon: type.toLowerCase()
        });
    }
    fieldsValidator(formId, xhr) {
        if (xhr.status === 419 || xhr.status === 401) {
            window.location.reload();
        }
        var errors = xhr.responseJSON.errors;

        // Iterate over errors and add Bootstrap "is-invalid" class
        $.each(errors, function (field, messages) {
            $(formId + ' [name="' + field + '"]').addClass('is-invalid');
            $(formId + ' [name="' + field + '"]').siblings('.invalid-feedback').text(messages[0]);
        });
    }







    delete_confirm_modal(route,data={}, callback) {

        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn bg-gradient-success',
                cancelButton: 'btn bg-gradient-danger'
            },
            buttonsStyling: false
        })
        swalWithBootstrapButtons.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {

                this.delete(route,
                    data,
                    data => {
                        this.Alert(data.msg, 'success');
                        callback(); // Call the callback function after successful deletion
                    },
                    xhr => {
                        this.Alert(xhr.responseJSON.msg, 'error');
                        // You may choose to call the callback even in case of an error
                        // callback();
                    }
                );
            } else {

            }
        });
    }

    showeditform(row){
        const self = this;
        localStorage.setItem('edit_id',row.id)
        $('#editForm [data-attr]').each(function() {
            const dataAttr = $(this).data('attr');
            if (dataAttr) {
                const value = self.getValueFromData(row, dataAttr);
                if ($(this).is('input:checkbox')) {
                    var checkbox = $(this);
                    checkbox.prop('checked', false);
                    if (Array.isArray(value)) {
                        value.map((val) => {
                            console.log(val['name']);
                            if (val['name'] == checkbox.val()) {
                                checkbox.prop('checked', true);
                            }
                        })
                    }

                } else if ($(this).is('input, select, textarea')) {
                    $(this).val(value);
                } else if ($(this).is('img')) {
                    $(this).attr('src', value);
                }
            }
        });
    }
     getValueFromData(dataObj, attribute) {
        const attributeParts = attribute.split('.');
        let value = dataObj;
        attributeParts.forEach((part) => {
            if (value && value.hasOwnProperty(part)) {
                value = value[part];
            } else if (value && Array.isArray(value)) {
                value.map((val) => {
                    if (val.hasOwnProperty(part)) {
                        value = value[part];
                    }
                });
                value = null;
            }
        });
        return value;
    }
}
