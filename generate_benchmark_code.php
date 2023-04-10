<?php


function get_namespace_code(string $namespace)
{
    $code = <<<  PHP


namespace $namespace {
    function testing() {
         \$result = "strlen is " . strlen("foobar") . "\n";
         // echo \$result;
         return \$result;
    }
}

PHP;

    return $code;
}

$contents = "<?php";

$autoload_code = <<< 'PHP'
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

PHP;

$contents .= "\n\n";

$contents .= $autoload_code;

for ($i=0; $i < 10; $i += 1) {
    $contents .= get_namespace_code("test_$i");
}


$contents .= "\n\n";
$contents .= "\n\n";

$contents .= "namespace {\n";


// Not sure whether increasing this makes the overhead smaller
// or bigger.
$number_of_namespaces = 10;

// The function lookup happens once, so making this number
// higher makes the overhead be relatively smaller.
$invocations_per_namespace = 1;

for ($j=0; $j < $invocations_per_namespace; $j += 1) {
    for ($i = 0; $i < $number_of_namespaces; $i += 1) {
        $namespace = "test_$i";
        $contents .= "\\$namespace\\testing();\n";
        $contents .= "\n";
    }
}

$contents .= "}\n";

file_put_contents(__DIR__ . "/benchmark.php", $contents);








