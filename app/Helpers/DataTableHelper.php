<?php
namespace App\Helpers;

use App\Models\User;
use App\DTO\DatatableDTO;
use Illuminate\Database\Eloquent\Model;

class DataTableHelper
{
    public static function getDtoData(DatatableDTO $DTO,$query,array $searchkeys=null,$orderindexes=null)
    {
       

        // Apply search filter if search value is provided
        if ($DTO->search) {
            if($searchkeys){
                foreach($searchkeys as $key){
                    $query->where($key, 'like', '%' . $DTO->search . '%');
                }
            }
        }

        // Apply order and pagination
        if($orderindexes){
            $query->orderBy(self::getOrderColumnName($DTO->orderColumn,$orderindexes), $DTO->orderDirection);
        }
        $query->skip($DTO->start)->take($DTO->length);

        return $query->get();
    }

    public static function getFilteredUserCount(DatatableDTO $DTO,Model $Model)
    {
        $query = $Model::query();

        // Apply search filter if search value is provided
        if ($DTO->search) {
            $query->where('name', 'like', '%' . $DTO->search . '%');
        }

        return $query->count();
    }

    // Example method to map DataTables order column index to model column name
    private static function getOrderColumnName($columnIndex,$columns)
    {
       
        return $columns[$columnIndex] ?? 'id'; // Default to 'id' if the index is not found
    }
}

