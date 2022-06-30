<?php


/*
Exercise 5 - XML import



There is an XML file attached to this email. The format is a standard REAXML (Real Estate XML:  http://reaxml.realestate.com.au/docs/reaxml1-xml-format.html), containing different property types.



Create a function to parse this XML file and store the properties in an associative array, the key being the uniqueID and the value being the property type (property type = node name).



For example, the following file:

<propertyList date="2019-01-15-17:54:20" username="agentbox" password="@g3ntboX*">
     <commercial modTime="2019-01-15-17:47:08" status="current">
         <agentID>ABTEST</agentID>
         <uniqueID>1P3115</uniqueID>
         ...
         <price display="yes">600000</price>
     </commercial>
 </propertyList>
Will result in the array:

[
     "1P3115" => "commercial"
 ]


use XML Parser on xml file.
fetch node name and child node ID

*/

namespace App;

class XMLImportClass
{
    public function XMLImport(string $inputxmlpath): ?array // Use simpexml to load file via filepath
    {
        if (file_exists($inputxmlpath)) {
            $propertyinfo = simplexml_load_file($inputxmlpath);

            return $this->fetchData($propertyinfo);
        }

    }

    private function fetchData($node): array { // fetch Node Data & Child Data using one foreach loop
        foreach ($node as $child) {
            $property_type = $child->getName();
            $uniqueID = (string) $child->uniqueID;
            break;
        }
        return array($uniqueID => $property_type);
    }
}
