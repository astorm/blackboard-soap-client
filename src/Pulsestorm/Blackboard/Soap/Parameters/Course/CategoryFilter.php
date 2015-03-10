<?php
/* Generated File: 2015-03-10 06:46:33*/
namespace Pulsestorm\Blackboard\Soap\Parameters\Course;
use Pulsestorm\Blackboard\Soap\Parameters\Base;
class CategoryFilter extends Base
{
    const NAMESPACE_XSD = 'http://course.ws.blackboard/xsd'; 
    const NAME          = 'filter'; 
    //start soap data
    public $expansionData;
    public $filterType;
    public $templateCategories;
    //end soap data

    public function getData()
    {
        $data = [
            'expansionData'=>$this->expansionData, 
            'filterType'=>$this->filterType, 
            'templateCategories'=>$this->templateCategories, 
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