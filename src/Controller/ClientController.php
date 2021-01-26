<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\TbleProspectClient;
use App\Entity\Phonenumber;
use App\Entity\Adresse;
use App\Form\AddClientType;
use App\Repository\TbleProspectClientRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\Common\Collections\ArrayCollection;


class ClientController extends AbstractController
{




     /**
     * @Route("/admin/clients/new", name="new_client")
     */
    public function newclient(Request $request, EntityManagerInterface $manager)
    {
        
        $client = new TbleProspectClient();
        $num = new Phonenumber();
        
        
        $form = $this->createForm(AddClientType::class , $client);
        $form->handleRequest($request);
    
        //type de client
        $type_client = $request->request->get('PP');
        $type_client_pm = $request->request->get('type');

        // recuperer tous les donnes des tables  TbleProspectClient,Phonenumber et Adresse 
        $repo = $this->getDoctrine()->getRepository(TbleProspectClient::class);
        $reponum = $this->getDoctrine()->getRepository(Phonenumber::class);
        $repoadr = $this->getDoctrine()->getRepository(Adresse::class);
        $all_clients = $repo->findAll();
        
       


///******************************Personne physique **************************************/       

        if ($form->isSubmitted() && $type_client == 'Personne physique'){ 
            
            //Nom client
            $nom_client = $request->request->get('nom');
            //Prenom client
            $prenom_client = $request->request->get('prenom');
            //Email client
            $email_client = $request->request->get('email');
            //Site web client
            $site_client = $request->request->get('site_web');
            //Poste client
            $poste_client = $request->request->get('poste');
            //Raison sociale client
            $raison_sociale_client = $request->request->get('raison_sociale_client');
            //Notes client
            $note= $request->request->get('remarque');
            //Origine client
            $origine= $request->request->get('origine');

            // Les lignes ajoutées de téléphones 
            $add = $request->request->get('myNumberadd');
            $nbrtel = $add + 1;

            //boucle for pour ajouter les num telephones et les titres dans des tables
            for($j=2;$j<=$nbrtel;$j++){
                $titre_tel[] = $request->request->get('titre_tel_'.$j);
                $num_tel[] = $request->request->get('num_tel_'.$j);
            }

            //longeur de tableau titre_tel
            $len = count($titre_tel);

            //Boucle for pour ajouter la client et leur data  et leur  numeros telephones
            for($i=0;$i<$len;++$i){
                if($titre_tel[$i] <> null && $num_tel[$i] <> null){
                    $phone[$i] = new Phonenumber($num_tel[$i]);
                    $manager->persist($phone[$i]);
                    $client->addPhonenumber($phone[$i],$phone[$i]->setTitle($titre_tel[$i]));
                    if($type_client =='Personne physique'){
                        $client->setNatureClient('Personne physique');
                        $client->setNomClient($nom_client);
                        $client->setPrenomClient($prenom_client);
                        $client->setEmailClient($email_client);
                        $client->setSiteWeb($site_client);
                        $client->setPosteClient($poste_client);
                        $client->setRaisonSocialeClient($raison_sociale_client);
                        $client->setNotesClient($note);
                        $client->setOrigine($origine);
                                if($client->getGenreClient()=='Monsieur'){
                                    $client->setNomComplet('Mr. '.$client->getPrenomClient().' '.$client->getNomClient());
                                }elseif($client->getGenreClient()=='Madame'){
                                    $client->setNomComplet('Mme. '.$client->getPrenomClient().' '.$client->getNomClient());
                                }else{
                                    $client->setNomComplet('Mlle. '.$client->getPrenomClient().' '.$client->getNomClient());
                                }
                        $client->setNat('PP')
                               ->setForSorting($client->getNomClient().' '.$client->getPrenomClient());
                    }

                    $client->setDateAjoutClient(new \DateTime());
                    $manager->persist($client);
                            try {
            
                                $manager->flush();
                            } catch(Exception $e) {
                            
                                $m = $e->getMessage();
                                echo $m . "<br />\n";
                            }

                }
            }

            // Les lignes ajoutées pour les adresses 
            $addadresse = $request->request->get('myAdresseadd');
            //dd($addadresse);
            if($addadresse != ''){
                $nbradresse = $addadresse + 1;
                        
                //boucle for pour ajouter les adresses , les regions , les codes postals et
                // les pays dans des tables
                for($i=2;$i<=$nbradresse;$i++){
                    $adresse[] = $request->request->get('adresse_'.$i);
                    $region[] = $request->request->get('region_'.$i);
                    $code_postal[] = $request->request->get('code_postal_'.$i);
                    $pays[] = $request->request->get('pays_'.$i);
                }

                 //longeur de tableau adresse
                 $lenadresse = count($adresse);

                 //Boucle for pour ajouter les adresses au base des donnees
                for($j=0;$j<$lenadresse;++$j){
                    if($adresse[$j] <> null && $region[$j] <> null && $code_postal[$j] <> null && $pays[$j] <> null){
                        $adr[$j] = new Adresse();        
                        // dd($adresse);
                         $manager->persist($adr[$j]);
                        //dd($manager);
                        $client->addAdress($adr[$j],
                                            $adr[$j]->setAdresseClient($adresse[$j]),
                                            $adr[$j]->setRegionClient($region[$j]),
                                            $adr[$j]->setCodePostalClient($code_postal[$j]),
                                            $adr[$j]->setPaysClient($pays[$j])
                                          );
            
                        $manager->persist($client);
                        try {
                
                            $manager->flush();
                        } catch(Exception $e) {
                        
                            $m = $e->getMessage();
                            echo $m . "<br />\n";
                        }
                    }

                }
            }
        
            $this->addFlash(
                'info',
                "Success Operation"
               );
            return $this->redirectToRoute('clients');
             
            
        } 

///****************************End Personne Physique*********************************************/

///*******************Personne Morale ou Etablissement public************************************/

        elseif($type_client_pm == 'Personne morale' or $type_client_pm == 'Etablissement public' ){

            //Raison sociale client
            $raison_sociale_client = $request->request->get('raison_sociale_client_pm');
            //Matricule fiscale client
            $matricule_fiscale = $request->request->get('matricule_fiscale_client_pm');
            //Genre client
            $genre_client = $request->request->get('genre');
            //Nom client
            $nom_pm = $request->request->get('nom_pm');
            //Prenom client
            $prenom_pm = $request->request->get('prenom_pm');
            //Email client
            $email_pm = $request->request->get('email_pm');
            //Site Web client
            $site_web_pm = $request->request->get('site_web_pm');
            //Notes client
            $remarque_pm= $request->request->get('remarque_pm');
            //Poste client
            $poste_pm = $request->request->get('poste_pm');
            //Origine client
            $origine_pm= $request->request->get('origine_pm');
            //Recommandé par 
            $recommander_par= $request->request->get('recommander_par');
            
            // Les lignes ajoutées de téléphones 
            $add = $request->request->get('myNumberaddpm');
            $nbrtel = $add + 1;
            //boucle for pour ajouter les num telephones et les titres dans des tables
            for($j=2;$j<=$nbrtel;$j++){
                  $titre_tel[] = $request->request->get('pm_titre_tel_'.$j);
                  $num_tel[] = $request->request->get('pm_num_tel_'.$j);
            }

            
            //longeur de tableau titre_tel
            $len = count($titre_tel);
            
            //Boucle for pour ajouter la client et leur data  et leur  numeros telephones
            for($i=0;$i<$len;++$i){
                if($titre_tel[$i] <> null && $num_tel[$i] <> null){
                    $phone[$i] = new Phonenumber($num_tel[$i]);
                    $manager->persist($phone[$i]);
                    $client->addPhonenumber($phone[$i],$phone[$i]->setTitle($titre_tel[$i]));
                    if($type_client_pm == 'Personne morale'){
                        $client->setNatureClient('Personne morale');
                        $client->setNat('PM');
                        $client->setGenreClient($genre_client);
                        $client->setMatriculFiscalClient($matricule_fiscale);
                        $client->setRaisonSocialeClient($raison_sociale_client);
                        $client->setNomClient($nom_pm);
                        $client->setPrenomClient($prenom_pm);
                        $client->setEmailClient($email_pm);
                        $client->setSiteWeb($site_web_pm);
                        $client->setPosteClient($poste_pm);
                        $client->setNotesClient($remarque_pm);
                        $client->setOrigine($origine_pm);
                        $client->setRecommanderPar($recommander_par);
                        
                        $client->setForSorting($client->getRaisonSocialeClient($raison_sociale_client));
                        $client->setNomComplet($client->getRaisonSocialeClient($raison_sociale_client));
                    }

                    if($type_client_pm == 'Etablissement public'){
                        $client->setNatureClient('Etablissement public');
                        $client->setNat('EP');
                        $client->setGenreClient($genre_client);
                        $client->setMatriculFiscalClient($matricule_fiscale);
                        $client->setRaisonSocialeClient($raison_sociale_client);
                        $client->setNomClient($nom_pm);
                        $client->setPrenomClient($prenom_pm);
                        $client->setEmailClient($email_pm);
                        $client->setSiteWeb($site_web_pm);
                        $client->setPosteClient($poste_pm);
                        $client->setNotesClient($remarque_pm);
                        $client->setOrigine($origine_pm);
                        $client->setRecommanderPar($recommander_par);
                        
                        $client->setForSorting($client->getRaisonSocialeClient($raison_sociale_client));
                        $client->setNomComplet($client->getRaisonSocialeClient($raison_sociale_client));
                    }


                    $client->setDateAjoutClient(new \DateTime());

                    $manager->persist($client);
                    try {
    
                        $manager->flush();
                    } catch(Exception $e) {
                    
                        $m = $e->getMessage();
                        echo $m . "<br />\n";
                    }

                }
            }

             // Les lignes ajoutées pour les adresses 
             $addadresse = $request->request->get('myAdresseaddpm');
            

            if($addadresse != ''){
                $nbradresse = $addadresse + 1;
                        
                //boucle for pour ajouter les adresses , les regions , les codes postals et
                // les pays dans des tables
                for($i=2;$i<=$nbradresse;$i++){
                    $adresse[] = $request->request->get('pm_adresse_'.$i);
                    $region[] = $request->request->get('pm_region_'.$i);
                    $code_postal[] = $request->request->get('pm_code_postal_'.$i);
                    $pays[] = $request->request->get('pm_pays_'.$i);
                }
                
                 //longeur de tableau adresse
                 $lenadresse = count($adresse);

                 //Boucle for pour ajouter les adresses au base des donnees
                for($j=0;$j<$lenadresse;++$j){
                    if($adresse[$j] <> null && $region[$j] <> null && $code_postal[$j] <> null && $pays[$j] <> null){
                        $adr[$j] = new Adresse();        
                        // dd($adresse);
                         $manager->persist($adr[$j]);
                        //dd($manager);
                        $client->addAdress($adr[$j],
                                            $adr[$j]->setAdresseClient($adresse[$j]),
                                            $adr[$j]->setRegionClient($region[$j]),
                                            $adr[$j]->setCodePostalClient($code_postal[$j]),
                                            $adr[$j]->setPaysClient($pays[$j])
                                          );
            
                        $manager->persist($client);
                        try {
                
                            $manager->flush();
                        } catch(Exception $e) {
                        
                            $m = $e->getMessage();
                            echo $m . "<br />\n";
                        }
                    }

                }
            }

            $this->addFlash(
                'info',
                "Success Operation"
               );
            return $this->redirectToRoute('clients');
              

        }

///************************End Personne Morale or Etablissement public**************************/



        return $this->render('client/ajouterclient.html.twig', [
            'formClient' => $form->createView(),
            'title_name' => 'Ajouter un client',
            'all_clients'     => $all_clients
            
            
            
            
        ]);
         
    }

    /**
     * @Route("/admin/clients/{id}/edit", name="edit_client")
     */
    public function editclient(Request $request, TbleProspectClient $client)
    {
        $form = $this->createForm(AddClientType::class , $client);
        $form->handleRequest($request);


        $repo = $this->getDoctrine()->getRepository(TbleProspectClient::class);
        $reponum = $this->getDoctrine()->getRepository(Phonenumber::class);
        $repoadr = $this->getDoctrine()->getRepository(Adresse::class);
        $all_clients = $repo->findAll();
        
        
        return $this->render('client/editclient.html.twig', [
            'formClient' => $form->createView(),
            'client'     => $client,
            'all_clients'     => $all_clients
            
            
            
        ]);
    }
    
    /**
     * @Route("/admin/clients", name="clients")
     */
    public function index()
    {
        $repo = $this->getDoctrine()->getRepository(TbleProspectClient::class);
        $reponum = $this->getDoctrine()->getRepository(Phonenumber::class);
        $repoadr = $this->getDoctrine()->getRepository(Adresse::class);
        $clients = $repo->findAll();
        //dd($clients);
        $nums = $reponum->findAll();
        //dd($nums);
        $adrs = $repoadr->findAll();

        return $this->render('client/client.html.twig', [
            'title_name' => 'Gestion des Clients',
            'clients'     => $clients,
            'nums'     => $nums,
            'adrs'     => $adrs,
        ]);
    }




    /**
     * @Route("/admin/clients/{id}/montre", name="show_client")
     */
    public function showclient($id)
    {
        $repo = $this->getDoctrine()->getRepository(TbleProspectClient::class);
        $client = $repo->find($id);
        
        return $this->render('client/show.html.twig', [
            'title_name' => 'Voir Client',
            'client'     => $client,
            
        ]);
    }



    /**
     * @Route("/user/{id}/supprimer", name="client_supprime")
     */
    public function deleteAction(TbleProspectClient $client , EntityManagerInterface $manager , Request $request,  $id)
    {
        $client = new TbleProspectClient();
        $client = $manager->getRepository(TbleProspectClient::class)->find($id);
        $manager->remove($client);
        $manager->flush();
        


        return $this->redirectToRoute('clients');
    }

    
}