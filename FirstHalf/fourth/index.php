<?php

$query = "SELECT u.firstName, u.lastName, c.city
FROM `users` AS u
JOIN city AS c ON u.city = c.id;";