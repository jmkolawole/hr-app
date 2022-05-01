<?php
function selectBadgeColor($role)
{

    switch ($role) {
        case 'Admin':
            return 'primary';
            break;

        case 'Super Admin':
            return 'danger';
            break;


        case 'Hr Admin':
            return 'success';
            break;

        case 'Employee':
            return 'secondary';
            break;

        default:
            # code...
            break;
    }
}
