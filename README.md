TESTPROJECT.

Run ./vendor/bin/phpunit tests for unit tests.



----------------------------------------------

This test has been drafted to assess your technical ability to solve standard problems. We will mostly look at the solutions chosen and the quality of the code provided, rather than the quantity of code produced.

 

The following guidelines are important:

Take the necessary time to complete the test but please do not exceed 3 hours.
The code must be committed to a public git repository, after each question. Please do not include the word Agentbox in the repository name.
Each function must be unit tested before moving to the next one. You can skip an exercise if you are stuck.
You are encouraged to avoid code duplication across different questions, when possible and relevant.
Do not use any third-party libraries or frameworks (except where required for unit tests)
 

Exercise 1 - Words without any repeating letters

 

Create a function that returns TRUE if a word does not have any repeating letter.

 

Examples of valid words:

documentarily
aftershock
countryside
six-year-old
 

Examples of invalid words:

Double-down
Euclidean
epidemic
 

The function must be in a dedicated class and must be fully unit tested.

 

Exercise 2 - Literal date parsing

 

Create a function taking a description of a date, and returning the actual date in the "YYYY-mm-dd" format.

 

Example:

"The first Monday of October 2019" => "2019-10-07"

"The third Tuesday of October 2019" => "2019-10-15"

"The last Wednesday of October 2019" => "2019-10-30"

 

The descriptors you are expected to support are: first, second, third, fourth, fifth, last.

 

The function must be in a dedicated class and must be fully unit tested.

 

Exercise 3 - String merge

 

Write a PHP function that merges two, character by character.

E.g : "MICHAEL", "JORDAN" = "MJIOCRHDAAENL"

 

The function must be in a dedicated class and must be fully unit tested.

 

Exercise 4 - Super-digit

 

Given a positive integer, compute the sum of each individual digit. If the resulting value is a single-digit number, return that number, otherwise repeat the operation until a single-digit number is reached.

 

For example:

 

4 --> 4

18 --> 1 + 8 = 9

258 --> 2 + 5 + 8 = 15 --> 1 + 5 = 6

 

The function must be in a dedicated class and must be fully unit tested.

 

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
 

Kind Regards,
