<?php

namespace RectorPrefix20210909;

if (\class_exists('t3lib_message_ErrorpageMessage')) {
    return;
}
class t3lib_message_ErrorpageMessage
{
}
\class_alias('t3lib_message_ErrorpageMessage', 't3lib_message_ErrorpageMessage', \false);
