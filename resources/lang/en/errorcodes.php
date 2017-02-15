<?php
/*** 400-Validation ErrorCode definition: must be from 2000 to 2999, and need to define here ***/
return [
    // Validation code for “Name” field
    'name.required'                        => [2001, 'The name field is required.'],
    'name.min'                             => [2002, 'The name length must be greater than 3 characters.'],
    'name.max'                             => [2003, 'The name may not be greater than 50 characters.'],
    'name.exists'                          => [2004, 'The name company has already in company list.'],
    // Validation code for “user info" field
    'full_name.required'                   => [2001, 'The full name field is required.'],
    'address.required'                     => [2001, 'The address field is required.'],
    'currentPassword.required'             => [2001, 'The current password field is required.'],
    'currentPassword.min'                  => [2041, 'Password must be at least 8 characters.'],
    'currentPassword.max'                  => [2042, 'Password must least 255 characters.'],
    'newPassword.confirmed'                => [2043, 'New password doesn\'t match.'],
    'newPassword.confirmed.not.match'      => [2044, 'Confirmed password doesn\'t match.'],
    'newPassword.required'                 => [2001, 'The new password field is required.'],
    'admin_level.required'                 => [2001, 'The admin level field is required.'],
    // Validation code for “First Name” field
    'first_name.required'                  => [2001, 'The first name field is required.'],
    'first_name.min'                       => [2002, 'The first name length must be greater than 3 characters.'],
    'first_name.max'                       => [2003, 'The first name may not be greater than 50 characters.'],
    'full_name.exists'                       => [2004, 'The full name has already been taken.'],
    // Validation code for “Last Name” field
    'last_name.required'                   => [2001, 'The last name field is required.'],
    'last_name.min'                        => [2002, 'The last name length must be greater than 3 characters.'],
    'last_name.max'                        => [2003, 'The last name may not be greater than 50 characters.'],
    // Validation code for “Username” field
    'username.required'                    => [2010, 'The username field is required.'],
    'username.exists'                      => [2031, 'The username has already been taken.'],
    'username.unique'                      => [2032, 'The supplied username is already registered to another account'],
    'username.min'                         => [2011, 'The username length must be greater than 4 characters.'],
    'username.max'                         => [2012, 'The username length must be at least than 20 characters'],
    'username.not.exists'                  => [2013, 'The user not exists'],
    // Validation code for “Email” field
    'email.required'                       => [2030, 'The email field is required.'],
    'email.exists'                         => [2031, 'The email has already been taken.'],
    'email.unique'                         => [2032, 'The supplied email is already registered to another account'],
    'email.email'                          => [2033, 'Invalid email'],
    'email.verify.required'                => [2034, 'Your entered email is not verified yet.'],
    'email.not.exists'                     => [2035, 'You\'ve entered email does not exist'],
    'email.sub'                            => [2036, 'The second or additional email has already in email.'],
    // Validation code for “Password” field
    'password.required'                    => [2040, 'The password field is required.'],
    'password.min'                         => [2041, 'Password must be at least 8 characters.'],
    'password.max'                         => [2042, 'Password must least 255 characters.'],
    'password.confirmed'                   => [2043, 'New password doesn\'t match.'],
    'password.confirmed.not.match'         => [2044, 'Confirmed password doesn\'t match.'],
    'password.new.required'                => [2045, 'New password is required.'],
    'password.wrong'                       => [2046, 'You\'ve entered wrong password.'],
    // Validation code for “Age” field
    'age.required'                         => [2050, 'The age field is required.'],
    'age.wrong'                            => [2051, 'The age must be a number.'],
    'age.max'                              => [2052, 'The age may not be greater than :max.'],
    // Validation code for “Title” field
    'title.required'                       => [2330, 'The title field is required.'],
    'title.min'                            => [2331, 'The title be at least 3 characters.'],
    'title.max'                            => [2332, 'The title must least 25 characters.'],
    // Validation code for “Description” field
    'description.required'                 => [2340, 'The description field is required.'],
    'description.min'                      => [2341, 'The description must be at least 3 characters.'],
    'description.max'                      => [2342, 'The description  must least 2000 characters.'],
    // Validation code for “Category” field
    'category.required'                    => [2440, 'The category field is required.'],
    'category.min'                         => [2441, 'The category must be at least 3 characters.'],
    'category.max'                         => [2442, 'The category  must least 2000 characters.'],
    'category.exists'                      => [2443, 'The category has already been taken.'],
    'category.not.exists'                      => [2444, 'The category not exists.'],
    // Validation todo
    'todo.not.exists'                      => [2500, 'The todo not exists.'],
    //admin
    'login.permission'                     =>[2760,'You not permission.'],



];

