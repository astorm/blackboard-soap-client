<?php
/* Generated File: 2015-03-10 06:46:33*/
namespace Pulsestorm\Blackboard\Soap\Parameters\Gradebook;
use Pulsestorm\Blackboard\Soap\Parameters\Base;
class GradebookTypeVO extends Base
{
    const NAMESPACE_XSD = 'http://gradebook.ws.blackboard/xsd'; 
    const NAME          = 'gradebookTypes'; 
    //start soap data
    public $calculated;
    public $courseId;
    public $description;
    public $displayedDescription;
    public $displayedTitle;
    public $expansionData;
    public $id;
    public $scorable;
    public $title;
    public $userDefined;
    public $weight;
    //end soap data

    public function getData()
    {
        $data = [
            'calculated'=>$this->calculated, 
            'courseId'=>$this->courseId, 
            'description'=>$this->description, 
            'displayedDescription'=>$this->displayedDescription, 
            'displayedTitle'=>$this->displayedTitle, 
            'expansionData'=>$this->expansionData, 
            'id'=>$this->id, 
            'scorable'=>$this->scorable, 
            'title'=>$this->title, 
            'userDefined'=>$this->userDefined, 
            'weight'=>$this->weight, 
        ];

        $data = array_filter($data, function($item){
            if($item)
            {
                return true;
            }
            return false;
        });

        return $data;

    }

}