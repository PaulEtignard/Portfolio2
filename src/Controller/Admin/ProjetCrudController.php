<?php

namespace App\Controller\Admin;

use App\Entity\Projet;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\String\Slugger\SluggerInterface;

class ProjetCrudController extends AbstractCrudController
{
    private SluggerInterface $slugger;
    public static function getEntityFqcn(): string
    {
        return Projet::class;
    }

    public function persistEntity(EntityManagerInterface $entityManager, $entityInstance): void
    {
        if (!$entityInstance instanceof Projet)return;
        $entityInstance ->setCreatedAt(new \DateTime());
        $entityInstance->setSlug($this->slugger->slug($entityInstance->getNom())->lower());
        parent::persistEntity($entityManager,$entityInstance);
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('nom'),
            TextEditorField::new('description'),
            DateTimeField::new('createdAt'),
            DateTimeField::new('dateFin')

        ];
    }


}
