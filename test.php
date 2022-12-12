<?php

session_start();
echo "Welcome " . $_SESSION['name'] . "  and your id is " . $_SESSION['id'];