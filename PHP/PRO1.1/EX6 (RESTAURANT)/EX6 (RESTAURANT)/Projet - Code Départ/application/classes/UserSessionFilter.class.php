<?php
 
class UserSessionFilter implements InterceptingFilter
{
    public function run(Http $http, array $queryFields, array $formFields)
    {
echo '<pre>';
var_dump(array("script" => __FILE__, "ligne" => __LINE__, 'UserSessionFilter:'));
debug_print_backtrace();
echo '</pre>';
        return
        [
            'userSession' => new UserSession()
        ];
    }
}