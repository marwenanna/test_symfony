<?php

namespace App\Form;

use App\Entity\TbleProduit;
use App\Entity\TbleEmploye;
use App\Entity\TbleStatutContact;
use App\Entity\TbleProspectClient;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class AddClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            
            
            ->add('matricul_fiscal_client', TextType::class, [
                'label'    => 'Matricule Fiscale',
                'attr' => ['class' => 'form-control'],
            ])
            ->add('genre_client', ChoiceType::class, [
                'choices'  => [
                    'Madame' => 'Madame',
                    'Monsieur' => 'Monsieur',
                ],
                'attr' => ['class' => 'custom-select'],
                'label'=> 'Genre',
                'required' => true,
                ])
            

            ->add('statut_client',EntityType::class,[
                'class' => TbleStatutContact::class,
                'choice_label' => 'statut',
                'attr' => ['class' => 'custom-select'],
                'label'=> 'Statut',
                ]) 
            
            ->add('interesse_par',EntityType::class,[
                'class' => TbleProduit::class,
                'choice_label' => 'designation_produit',
                'attr' => ['class' => 'custom-select'],
                'label'=> 'Interessé par',
                ])
            
            

            
            ->add('recommander_par', ChoiceType::class, [
                'choices'  => [
                    "Apporteur d'affaire" => "Apporteur d'affaire",
                    'Appel direct sortant' => 'Appel direct sortant',
                    'Contact E-mail Direct' => 'Contact E-mail Direct',
                    'Mailing' => 'Mailing',
                    'Parainage' => 'Parainage',
                    'Prospection directe' => 'Prospection directe', 
                    'Réseaux sociaux' => 'Réseaux sociaux',
                    'Salon / Evénement' => 'Salon / Evénement',
                    'Site web' => 'Site web',
                    'Autre client' => 'Autre client', 
                    'Autre' => 'Autre',  
                    ],
                'attr' => ['class' => 'custom-select'],
                'label'=> 'Recommandé par',
                ]) 
                
            
           
           
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TbleProspectClient::class,
        ]);
    }
}
