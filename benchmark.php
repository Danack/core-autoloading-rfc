<?php

namespace {

 echo "Hello world\n";

function my_function_loader(string $function_name) {
//    echo "Autoloader called with $function_name \n";
    if (str_starts_with($function_name, 'App') === false) {
        return;
    }
}

if (rand(0,1) == 0) {
    // actually setup function autoloader
    echo "autoloader funct\n";
    autoload_register_function(my_function_loader(...));
} 
else {
   // deliberately wrong, but similar, to make equivalent
   // number of operations in setup.
   echo "autoloader class\n";
   autoload_register_class(my_function_loader(...));
}

}


namespace test_0 {
    function testing() {
         $result = "strlen is " . strlen("foobar") . "
";
         // echo $result;
         return $result;
    }
}


namespace test_1 {
    function testing() {
         $result = "strlen is " . strlen("foobar") . "
";
         // echo $result;
         return $result;
    }
}


namespace test_2 {
    function testing() {
         $result = "strlen is " . strlen("foobar") . "
";
         // echo $result;
         return $result;
    }
}


namespace test_3 {
    function testing() {
         $result = "strlen is " . strlen("foobar") . "
";
         // echo $result;
         return $result;
    }
}


namespace test_4 {
    function testing() {
         $result = "strlen is " . strlen("foobar") . "
";
         // echo $result;
         return $result;
    }
}


namespace test_5 {
    function testing() {
         $result = "strlen is " . strlen("foobar") . "
";
         // echo $result;
         return $result;
    }
}


namespace test_6 {
    function testing() {
         $result = "strlen is " . strlen("foobar") . "
";
         // echo $result;
         return $result;
    }
}


namespace test_7 {
    function testing() {
         $result = "strlen is " . strlen("foobar") . "
";
         // echo $result;
         return $result;
    }
}


namespace test_8 {
    function testing() {
         $result = "strlen is " . strlen("foobar") . "
";
         // echo $result;
         return $result;
    }
}


namespace test_9 {
    function testing() {
         $result = "strlen is " . strlen("foobar") . "
";
         // echo $result;
         return $result;
    }
}




namespace {
\test_0\testing();

\test_1\testing();

\test_2\testing();

\test_3\testing();

\test_4\testing();

\test_5\testing();

\test_6\testing();

\test_7\testing();

\test_8\testing();

\test_9\testing();

}
