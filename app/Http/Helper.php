<?php
use Illuminate\Support\Facades\Session;
use App\Models\User;

if(!function_exists('displayAlert')) {
    function displayAlert()
    {
        if (Session::has('message'))
        {
            // Here type represnt the class of alert
            list($type, $message) = explode('|', Session::get('message'));
            return sprintf('<div class="alert alert-%s">%s</div>', $type, $message);
        }

        return '';
    }
}

if( !function_exists('printOldOrDbValue') ) {
    function printOldOrDbValue($key, $data=null) {
        
        $value = '';

        if( !empty($key) ) {
            if( !empty(old($key)) ) {
                // Return Old Value
                $value = old($key);
            }
            elseif( !empty($data) ) {
                // Return Value from db
                if( is_object($data) ) {
                    $value = $data->$key;
                }
                elseif( is_array($data) ) {
                    $value = $data[$key];
                }
            }
            return $value;
        }
        return $value;
    }
}

if( !function_exists('fetchingSingleValue') ) {
    function fetchingSingleValue($tableName, $columnName, $colVal, $fetchCol) {
        $data = \DB::table($tableName)->where($columnName, $colVal)->select($fetchCol)->first();
        if(empty($data)) 
            return '';
        return $data->$fetchCol;
    }
}

if( !function_exists('cureentUserChildren')) {
    function cureentUserChildren($id = null, $data = null) {
        
        if($id) {
            $parent = User::where('parent_id',$id)->get();
        }
        else {
            $data = [];
            $data[] = Auth::id();
            $parent = User::where('parent_id',Auth::id())->get();
        }

        foreach($parent as $key => $val) {
            $data[] = $val->id;
            
            $parents = User::where('parent_id',$val->id)->count();
            if($parents > 0) {
                return cureentUserChildren($val->id, $data);
            } 
        }
        // dd($data);
        return $data;
    }
}

function getChildren($id = null) {
    if($id) {
        $parent = User::where('parent_id',$id)->get();
    }
    else {
        $parent = User::where('parent_id',Auth::id())->get();
    }

    $data = [];
    foreach($parent as $key => $val) {
        $data[] = $val->id;
        $parents = User::where('parent_id',$val->id)->count();

        if($parents > 0) {
            return getChildren();
        }
    }
}