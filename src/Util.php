<?php
// Debug
$debug_index_level = 0;

function DebugIndentBegin()
{
    global $debug_indent_level;
    $debug_indent_level++;
}

function DebugIndentEnd()
{
    global $debug_indent_level;
    $debug_indent_level--;
}

function DebugLog($log_string)
{
    global $debug_indent_level;
    for($i=0; $i<$debug_indent_level; $i++)
    {
        echo "   ";
    }
    echo($log_string."<br/>");
}


