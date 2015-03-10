<?php
/* Generated File: 2015-03-10 06:46:33*/
namespace Pulsestorm\Blackboard\Soap\Parameters\Course;
use Pulsestorm\Blackboard\Soap\Parameters\Base;
class CategoryMembershipFilter extends Base
{
    const NAMESPACE_XSD = 'http://course.ws.blackboard/xsd'; 
    const NAME          = 'filter'; 
    //start soap data
    public $expansionData;
    public $filterType;
    public $templateCategoryMembership;
    //end soap data

    public function getData()
    {
        $data = [
            'expansionData'=>$this->expansionData, 
            'filterType'=>$this->filterType, 
            'templateCategoryMembership'=>$this->templateCategoryMembership, 
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