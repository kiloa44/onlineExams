<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class UserResources extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */

    public function toArray($request)
    {
        $data = ($this->student)?'student':'teacher';
        $content = ($this->student)?$this->student:$this->teacher;
        //return parent::toArray($request);
        return [
            "username"=>$this->username,
            "name"=>$this->name,
            "email"=>$this->email,
            "type"=>$data,
            $data=>$content
        ];
    }
}
