<?php
/* Generated File: 2015-03-10 06:46:33*/
namespace Pulsestorm\Blackboard\Soap\Parameters\Content;
use Pulsestorm\Blackboard\Soap\Parameters\Base;
class CourseTOCVO extends Base
{
    const NAMESPACE_XSD = 'http://content.ws.blackboard/xsd'; 
    const NAME          = 'vo'; 
    //start soap data
    public $allowGuests;
    public $allowObservers;
    public $contentAvailable;
    public $contentEmpty;
    public $courseContentsId;
    public $courseId;
    public $enabled;
    public $entryPoint;
    public $expansionData;
    public $id;
    public $internalHandle;
    public $label;
    public $launchInNewWindow;
    public $persistentLabel;
    public $position;
    public $tocTarget;
    public $url;
    //end soap data

    public function getData()
    {
        $data = [
            'allowGuests'=>$this->allowGuests, 
            'allowObservers'=>$this->allowObservers, 
            'contentAvailable'=>$this->contentAvailable, 
            'contentEmpty'=>$this->contentEmpty, 
            'courseContentsId'=>$this->courseContentsId, 
            'courseId'=>$this->courseId, 
            'enabled'=>$this->enabled, 
            'entryPoint'=>$this->entryPoint, 
            'expansionData'=>$this->expansionData, 
            'id'=>$this->id, 
            'internalHandle'=>$this->internalHandle, 
            'label'=>$this->label, 
            'launchInNewWindow'=>$this->launchInNewWindow, 
            'persistentLabel'=>$this->persistentLabel, 
            'position'=>$this->position, 
            'tocTarget'=>$this->tocTarget, 
            'url'=>$this->url, 
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