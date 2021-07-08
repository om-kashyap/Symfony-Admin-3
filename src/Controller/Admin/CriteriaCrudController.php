<?php

namespace App\Controller\Admin;

use App\Entity\Criteria;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CriteriaCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Criteria::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
