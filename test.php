<?php

require_once 'quiklog.php';

qlogconf( 'quiklog.ini' );
qlog_info( 'This' );
qlog_warning( 'is' );
qlog( 'so', 'extremely' );
qlog_error( 'cool!' );
