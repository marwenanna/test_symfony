<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201205182158 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE contact (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(75) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE phonenumber (id INT AUTO_INCREMENT NOT NULL, contact_id INT NOT NULL, number VARCHAR(10) NOT NULL, INDEX IDX_EFF286D2E7A1254A (contact_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE taux_de_commision (id INT AUTO_INCREMENT NOT NULL, taux_de_commision INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tble_affaire (id INT AUTO_INCREMENT NOT NULL, pole_affaire_id INT NOT NULL, traiter_par_id INT NOT NULL, code_client_id INT NOT NULL, apporteur_affaire_aff_id INT NOT NULL, date_affaire DATETIME NOT NULL, resume_affaire VARCHAR(255) NOT NULL, commentaires_affaire VARCHAR(255) NOT NULL, nouvelle_relance DATETIME NOT NULL, message_alerte_aff TINYINT(1) NOT NULL, alerte_aff TINYINT(1) NOT NULL, ne_pas_afficher_alerte_aff TINYINT(1) NOT NULL, INDEX IDX_45B55F3D7303CE8 (pole_affaire_id), INDEX IDX_45B55F34546CD3F (traiter_par_id), INDEX IDX_45B55F3B5AE1119 (code_client_id), INDEX IDX_45B55F3B8A86DD8 (apporteur_affaire_aff_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tble_alarmes_rappel_reminders (id INT AUTO_INCREMENT NOT NULL, employer_a_rappeler_id INT NOT NULL, affaire_id INT NOT NULL, sujet_rappel LONGTEXT NOT NULL, description_rappel LONGTEXT NOT NULL, date_alarme_rappel DATE NOT NULL, message TINYINT(1) NOT NULL, alarme TINYINT(1) NOT NULL, ne_pas_afficher TINYINT(1) NOT NULL, commentaires LONGTEXT NOT NULL, priorite VARCHAR(20) NOT NULL, etat VARCHAR(255) NOT NULL, date_debut DATE NOT NULL, date_due DATE NOT NULL, pourcentage_complet DOUBLE PRECISION NOT NULL, actif TINYINT(1) NOT NULL, INDEX IDX_667895B650AB9298 (employer_a_rappeler_id), INDEX IDX_667895B6F082E755 (affaire_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tble_apporteur_affaires (id INT AUTO_INCREMENT NOT NULL, secteur_activite_app_aff_id INT NOT NULL, genre_app_aff VARCHAR(15) NOT NULL, nom_app_aff VARCHAR(25) NOT NULL, prenom_app_aff VARCHAR(25) NOT NULL, type_app_aff VARCHAR(25) NOT NULL, nature_app_aff VARCHAR(35) NOT NULL, raison_sociale_app_aff VARCHAR(50) NOT NULL, matricule_fiscale_app_aff VARCHAR(30) NOT NULL, tel1_app_aff INT NOT NULL, tel2_app_aff INT NOT NULL, email_app_aff VARCHAR(255) NOT NULL, adresse_app_aff VARCHAR(255) NOT NULL, gouvernorat_app_aff INT NOT NULL, commissionaire_app_aff TINYINT(1) NOT NULL, facturation_app_aff TINYINT(1) NOT NULL, nom_prenom_app_aff VARCHAR(255) NOT NULL, nom_complet_app_aff VARCHAR(255) NOT NULL, notes_app_aff LONGTEXT NOT NULL, taux_commission_app_aff DOUBLE PRECISION NOT NULL, INDEX IDX_AF3E60DA46766B8C (secteur_activite_app_aff_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tble_categorie_pdt (id INT AUTO_INCREMENT NOT NULL, category VARCHAR(20) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tble_commande_clt (id INT AUTO_INCREMENT NOT NULL, commande_par_id INT NOT NULL, client_commande_id INT NOT NULL, id_affaire_cde_id INT NOT NULL, statut_cde_id INT NOT NULL, traiter_par_cde_id INT NOT NULL, id_facture_id INT NOT NULL, num_commande INT NOT NULL, temps_commande TIME NOT NULL, date_commande DATETIME NOT NULL, resume_commande LONGTEXT NOT NULL, facture_devis TINYINT(1) NOT NULL, payer TINYINT(1) NOT NULL, valider TINYINT(1) NOT NULL, num_devis VARCHAR(255) NOT NULL, date_devis DATE NOT NULL, num_facture VARCHAR(255) NOT NULL, date_facture DATE NOT NULL, num_bl VARCHAR(255) NOT NULL, date_bl DATE NOT NULL, livrer TINYINT(1) NOT NULL, suivi_commande_interne VARCHAR(255) NOT NULL, remarques_cde LONGTEXT NOT NULL, is_facture TINYINT(1) NOT NULL, is_devis TINYINT(1) NOT NULL, is_bon_livraison TINYINT(1) NOT NULL, id_devis INT NOT NULL, id_bl INT NOT NULL, date_soumission DATETIME NOT NULL, date_approbation_rejet DATETIME NOT NULL, tva_commande DOUBLE PRECISION NOT NULL, livraison_commande DOUBLE PRECISION NOT NULL, total_commande DOUBLE PRECISION NOT NULL, INDEX IDX_1688B33844D07D7F (commande_par_id), INDEX IDX_1688B33883A10B6F (client_commande_id), INDEX IDX_1688B338CC376B0F (id_affaire_cde_id), INDEX IDX_1688B3387167B79D (statut_cde_id), INDEX IDX_1688B338848D5711 (traiter_par_cde_id), INDEX IDX_1688B338DAA76EDF (id_facture_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tble_conge (id INT AUTO_INCREMENT NOT NULL, id_employe_conge_id INT NOT NULL, statut_conge VARCHAR(20) NOT NULL, date_debut_conge DATE NOT NULL, date_fin_conge DATE NOT NULL, notes_conge LONGTEXT NOT NULL, INDEX IDX_2555EC77663D32B6 (id_employe_conge_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tble_depenses (id INT AUTO_INCREMENT NOT NULL, id_bc_depenses_id INT NOT NULL, id_affaire_depenses_id INT NOT NULL, introduite_par_id INT NOT NULL, id_commande_depenses_id INT NOT NULL, date_depenses DATETIME NOT NULL, type_depenses VARCHAR(255) NOT NULL, titre_depenses VARCHAR(55) NOT NULL, resume_depenses VARCHAR(255) NOT NULL, momtant_depenses DOUBLE PRECISION NOT NULL, notes_depenses LONGTEXT NOT NULL, INDEX IDX_FAAC36C924B41896 (id_bc_depenses_id), INDEX IDX_FAAC36C9B0B1AA6F (id_affaire_depenses_id), INDEX IDX_FAAC36C9F2919A23 (introduite_par_id), INDEX IDX_FAAC36C9768A2117 (id_commande_depenses_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tble_detail_commande (id INT AUTO_INCREMENT NOT NULL, id_commande_det_id INT NOT NULL, id_produit_det_id INT NOT NULL, id_statut_det_cde_id INT NOT NULL, id_ordre_achat_det_id INT NOT NULL, id_devis_det INT NOT NULL, id_facture_det INT NOT NULL, quantite INT NOT NULL, remise_accordee DOUBLE PRECISION NOT NULL, tva TINYINT(1) NOT NULL, id_inventaire_det VARCHAR(255) NOT NULL, dateallouee DATETIME NOT NULL, facture_det_cde TINYINT(1) NOT NULL, livrer_det_cde TINYINT(1) NOT NULL, INDEX IDX_E4EF5EE6E5220766 (id_commande_det_id), INDEX IDX_E4EF5EE6C41C4907 (id_produit_det_id), INDEX IDX_E4EF5EE62323DCD7 (id_statut_det_cde_id), INDEX IDX_E4EF5EE691AF7FC2 (id_ordre_achat_det_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tble_detail_ordre_achat (id INT AUTO_INCREMENT NOT NULL, id_ordre_achat_id INT NOT NULL, id_produit_id INT NOT NULL, quantite INT NOT NULL, prix_unitaire_ht DOUBLE PRECISION NOT NULL, date_reception DATE NOT NULL, poste_a_inventaire TINYINT(1) NOT NULL, id_inventaire VARCHAR(255) NOT NULL, INDEX IDX_2C79A27860B4C579 (id_ordre_achat_id), INDEX IDX_2C79A278AABEFE2C (id_produit_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tble_devis (id INT AUTO_INCREMENT NOT NULL, traiter_par_id INT NOT NULL, num_devis INT NOT NULL, id_affaires_devis INT NOT NULL, id_commande_devis INT NOT NULL, date_devis DATETIME NOT NULL, date_remise_client_devis DATE NOT NULL, valide_pour_devis INT NOT NULL, client_devis INT NOT NULL, expiration_date_devis LONGTEXT NOT NULL, tva_devis DOUBLE PRECISION NOT NULL, livraison_devis DOUBLE PRECISION NOT NULL, total_devis DOUBLE PRECISION NOT NULL, is_submitted_devis TINYINT(1) NOT NULL, is_approuved TINYINT(1) NOT NULL, is_rejected TINYINT(1) NOT NULL, en_commande TINYINT(1) NOT NULL, is_invoiced_devis TINYINT(1) NOT NULL, is_active_devis TINYINT(1) NOT NULL, is_new_devis TINYINT(1) NOT NULL, is_commande_devis TINYINT(1) NOT NULL, condition_paiement_devis VARCHAR(25) NOT NULL, statut_devis INT NOT NULL, notes_devis VARCHAR(255) NOT NULL, closed_date_devis DATETIME NOT NULL, date_soumission DATETIME NOT NULL, date_approbation DATETIME NOT NULL, date_rejet DATETIME NOT NULL, date_transfert_facture DATETIME NOT NULL, date_transfert_commande DATETIME NOT NULL, INDEX IDX_80AABA144546CD3F (traiter_par_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tble_employe (id INT AUTO_INCREMENT NOT NULL, type_employe VARCHAR(25) NOT NULL, genre_employe VARCHAR(15) NOT NULL, nom_employe VARCHAR(255) NOT NULL, prenom_employe VARCHAR(255) NOT NULL, tel_employe VARCHAR(10) NOT NULL, adresse_employe VARCHAR(100) NOT NULL, gouvernorat_employe INT NOT NULL, fonction_employe VARCHAR(25) NOT NULL, matricul VARCHAR(255) NOT NULL, num_cnss VARCHAR(255) NOT NULL, date_embauche DATE NOT NULL, nom_complet_emp VARCHAR(255) NOT NULL, grade VARCHAR(30) NOT NULL, departement_employe VARCHAR(30) NOT NULL, service_employe VARCHAR(30) NOT NULL, ccb_ccp VARCHAR(255) NOT NULL, rib_banque VARCHAR(255) NOT NULL, tel_2_employe VARCHAR(10) NOT NULL, email_employe VARCHAR(255) NOT NULL, notes_employe LONGTEXT NOT NULL, nom_prenom VARCHAR(255) NOT NULL, cin VARCHAR(255) NOT NULL, etat_civil VARCHAR(15) NOT NULL, enfant_a_charge INT NOT NULL, jours_conge_autorise_par_mois INT NOT NULL, is_still_working TINYINT(1) NOT NULL, ne_pas_afficher_alerte TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tble_employe1 (id INT AUTO_INCREMENT NOT NULL, type_employe VARCHAR(25) NOT NULL, genre_employe VARCHAR(15) NOT NULL, nom_employe VARCHAR(255) NOT NULL, prenom_employe VARCHAR(255) NOT NULL, tel_employe VARCHAR(10) NOT NULL, adresse_employe VARCHAR(100) NOT NULL, gouvernorat_employe INT NOT NULL, fonction_employe VARCHAR(25) NOT NULL, matricul VARCHAR(255) NOT NULL, num_cnss VARCHAR(255) NOT NULL, date_embauche DATE NOT NULL, nom_complet_emp VARCHAR(255) NOT NULL, grade VARCHAR(30) NOT NULL, departement_employe VARCHAR(30) NOT NULL, service_employe VARCHAR(30) NOT NULL, ccb_ccp VARCHAR(255) NOT NULL, rib_banque VARCHAR(255) NOT NULL, tel_2_employe VARCHAR(10) NOT NULL, email_employe VARCHAR(255) NOT NULL, notes_employe LONGTEXT NOT NULL, nom_prenom VARCHAR(255) NOT NULL, cin VARCHAR(255) NOT NULL, etat_civil VARCHAR(15) NOT NULL, enfant_a_charge INT NOT NULL, jours_conge_autorise_par_mois INT NOT NULL, is_still_working TINYINT(1) NOT NULL, ne_pas_afficher_alerte TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tble_employe2 (id INT AUTO_INCREMENT NOT NULL, type_employe VARCHAR(25) NOT NULL, genre_employe VARCHAR(15) NOT NULL, nom_employe VARCHAR(255) NOT NULL, prenom_employe VARCHAR(255) NOT NULL, tel_employe VARCHAR(10) NOT NULL, adresse_employe VARCHAR(100) NOT NULL, gouvernorat_employe INT NOT NULL, fonction_employe VARCHAR(25) NOT NULL, matricul VARCHAR(255) NOT NULL, num_cnss VARCHAR(255) NOT NULL, date_embauche DATE NOT NULL, nom_complet_emp VARCHAR(255) NOT NULL, grade VARCHAR(30) NOT NULL, departement_employe VARCHAR(30) NOT NULL, service_employe VARCHAR(30) NOT NULL, ccb_ccp VARCHAR(255) NOT NULL, rib_banque VARCHAR(255) NOT NULL, tel_2_employe VARCHAR(10) NOT NULL, email_employe VARCHAR(255) NOT NULL, notes_employe LONGTEXT NOT NULL, nom_prenom VARCHAR(255) NOT NULL, cin VARCHAR(255) NOT NULL, etat_civil VARCHAR(15) NOT NULL, enfant_a_charge INT NOT NULL, jours_conge_autorise_par_mois INT NOT NULL, is_still_working TINYINT(1) NOT NULL, ne_pas_afficher_alerte TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tble_facture (id INT AUTO_INCREMENT NOT NULL, traiter_par_facture_id INT NOT NULL, id_commande_facture_id INT NOT NULL, client_facture_id INT NOT NULL, affaire_facture_id INT NOT NULL, num_facture INT NOT NULL, id_devis_facture INT NOT NULL, date_facture DATETIME NOT NULL, date_payee_facture DATETIME NOT NULL, tva_facture DOUBLE PRECISION NOT NULL, frais_livraison_clt_facture DOUBLE PRECISION NOT NULL, total_facture DOUBLE PRECISION NOT NULL, conditions_paiement_facture VARCHAR(25) NOT NULL, livree_facture TINYINT(1) NOT NULL, paye_facture TINYINT(1) NOT NULL, nouveau_facture TINYINT(1) NOT NULL, soumise_pnt_facture TINYINT(1) NOT NULL, mois_facture DOUBLE PRECISION NOT NULL, trimestre_facture DOUBLE PRECISION NOT NULL, annee INT NOT NULL, notes LONGTEXT NOT NULL, echeance_facture DATETIME NOT NULL, echeance_rest_facture DATETIME NOT NULL, is_bl TINYINT(1) NOT NULL, INDEX IDX_66E2290C6DCD27D7 (traiter_par_facture_id), INDEX IDX_66E2290CA1055E25 (id_commande_facture_id), INDEX IDX_66E2290CEF79D349 (client_facture_id), INDEX IDX_66E2290C157526B0 (affaire_facture_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tble_facture1 (id INT AUTO_INCREMENT NOT NULL, num_facture INT NOT NULL, traiter_par_facture INT NOT NULL, id_devis_facture INT NOT NULL, id_commande_facture INT NOT NULL, date_facture DATETIME NOT NULL, date_payee_facture DATETIME NOT NULL, tva_facture DOUBLE PRECISION NOT NULL, frais_livraison_clt_facture DOUBLE PRECISION NOT NULL, total_facture DOUBLE PRECISION NOT NULL, conditions_paiement_facture VARCHAR(25) NOT NULL, client_facture INT NOT NULL, affaire_facture INT NOT NULL, livree_facture TINYINT(1) NOT NULL, paye_facture TINYINT(1) NOT NULL, nouveau_facture TINYINT(1) NOT NULL, soumise_pnt_facture TINYINT(1) NOT NULL, mois_facture DOUBLE PRECISION NOT NULL, trimestre_facture DOUBLE PRECISION NOT NULL, annee INT NOT NULL, notes LONGTEXT NOT NULL, echeance_facture DATETIME NOT NULL, echeance_rest_facture DATETIME NOT NULL, is_bl TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tble_fournisseur (id INT AUTO_INCREMENT NOT NULL, pris_en_charge_par_fournisseur_id INT NOT NULL, type_fournisseur_id INT NOT NULL, secteur_activite_id INT NOT NULL, raison_sociale_fournisseur VARCHAR(255) NOT NULL, adresse_fournisseur VARCHAR(255) NOT NULL, tel_1_fournisseur VARCHAR(10) NOT NULL, email_fournisseur VARCHAR(255) NOT NULL, date_ajout_fournisseur DATE NOT NULL, matricule_fiscale_fournisseur VARCHAR(255) NOT NULL, fonction_fournisseur VARCHAR(255) NOT NULL, contact_fournisseur VARCHAR(60) NOT NULL, tel_2_fournisseur VARCHAR(10) NOT NULL, governorat_fournisseur INT NOT NULL, commisionaire TINYINT(1) NOT NULL, taux_commission_ht DOUBLE PRECISION NOT NULL, notes_fournisseur VARCHAR(255) NOT NULL, genre VARCHAR(255) NOT NULL, nom_fournisseur VARCHAR(255) NOT NULL, prenom_fournisseur VARCHAR(255) NOT NULL, nom_complet VARCHAR(255) NOT NULL, full_name_frs VARCHAR(255) NOT NULL, INDEX IDX_AB568953C8420049 (pris_en_charge_par_fournisseur_id), INDEX IDX_AB56895331CF5CEB (type_fournisseur_id), INDEX IDX_AB5689535233A7FC (secteur_activite_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tble_governorat (id INT AUTO_INCREMENT NOT NULL, governorat LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tble_ligne_de_produits (id INT AUTO_INCREMENT NOT NULL, ligne_de_produit VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tble_livrable_attendu (id INT AUTO_INCREMENT NOT NULL, id_affaire_liv_id INT NOT NULL, proprietaire_liv_id INT NOT NULL, description_liv_id INT NOT NULL, a_preparer_par_liv INT NOT NULL, livrable_attendu VARCHAR(20) NOT NULL, suivi_livrable VARCHAR(10) NOT NULL, date_remise_liv DATE NOT NULL, commentaire_livrable LONGTEXT NOT NULL, date_debut_liv DATE NOT NULL, date_fin_liv DATE NOT NULL, priorite_liv VARCHAR(25) NOT NULL, avancement_pourcent_liv DOUBLE PRECISION NOT NULL, message_alerte_liv TINYINT(1) NOT NULL, alerte_liv TINYINT(1) NOT NULL, ne_pas_afficher_alerte_liv TINYINT(1) NOT NULL, etat VARCHAR(20) NOT NULL, actif_liv DOUBLE PRECISION NOT NULL, INDEX IDX_CC38A648875DE51A (id_affaire_liv_id), INDEX IDX_CC38A648AF910B2D (proprietaire_liv_id), INDEX IDX_CC38A648C39C3754 (description_liv_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tble_livraison_cde (id INT AUTO_INCREMENT NOT NULL, id_commande_livraison_id INT NOT NULL, governorat_livraison_id INT NOT NULL, transporteur_livraison_id INT NOT NULL, date_livraison DATE NOT NULL, adresse_livraison LONGTEXT NOT NULL, a_livrer_par LONGTEXT NOT NULL, suivi_livraison LONGTEXT NOT NULL, montant_facture_livraison DOUBLE PRECISION NOT NULL, charges_payees_livraison DOUBLE PRECISION NOT NULL, livree TINYINT(1) NOT NULL, facturee TINYINT(1) NOT NULL, INDEX IDX_3AF4A834651FCC6E (id_commande_livraison_id), INDEX IDX_3AF4A8348B43ADE3 (governorat_livraison_id), INDEX IDX_3AF4A834E3B816F1 (transporteur_livraison_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tble_mode_paiement (id INT AUTO_INCREMENT NOT NULL, mode_paiement VARCHAR(30) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tble_operation_inventaire (id INT AUTO_INCREMENT NOT NULL, transaction_type_id INT NOT NULL, product_id_id INT NOT NULL, commande_client_id_id INT NOT NULL, transaction_created_date DATE NOT NULL, transaction_modified_date DATE NOT NULL, quantity DOUBLE PRECISION NOT NULL, ordre_achat_id INT NOT NULL, id_detail_oa INT NOT NULL, comments LONGTEXT NOT NULL, id_detail_cde INT NOT NULL, INDEX IDX_CF1ECBA5B3E6B071 (transaction_type_id), INDEX IDX_CF1ECBA5DE18E50B (product_id_id), INDEX IDX_CF1ECBA5E6D5A2AB (commande_client_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tble_ordre_achat (id INT AUTO_INCREMENT NOT NULL, fournisseur_id__id INT NOT NULL, cree_par_id INT NOT NULL, status_oa_id_id INT NOT NULL, aprouve_par_id INT NOT NULL, soumise_par_id INT NOT NULL, num_bc INT NOT NULL, reference_devis_frs VARCHAR(50) NOT NULL, date_devis_frs DATETIME NOT NULL, date_soumission DATE NOT NULL, date_creation DATE NOT NULL, date_prevu DATE NOT NULL, frais_livraison DOUBLE PRECISION NOT NULL, taxes DOUBLE PRECISION NOT NULL, date_paiement DATE NOT NULL, montant_paye DOUBLE PRECISION NOT NULL, methode_payement VARCHAR(50) NOT NULL, notes LONGTEXT NOT NULL, date_aprobation DATE NOT NULL, INDEX IDX_ECF829B8352F7D4C (fournisseur_id__id), INDEX IDX_ECF829B8FC29C013 (cree_par_id), INDEX IDX_ECF829B8984C5E9F (status_oa_id_id), INDEX IDX_ECF829B858C9F282 (aprouve_par_id), INDEX IDX_ECF829B817930DCB (soumise_par_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tble_paiement (id INT AUTO_INCREMENT NOT NULL, proprietaire_pnt_id INT NOT NULL, id_commande_pnt_id INT NOT NULL, mode_paiement_pnt_id INT NOT NULL, type_paiement_pnt VARCHAR(25) NOT NULL, date_paiement DATE NOT NULL, montant_percu_pnt DOUBLE PRECISION NOT NULL, num_piece_pnt INT NOT NULL, banque_emetrice_pnt VARCHAR(30) NOT NULL, echeance_pnt DATE NOT NULL, rest_a_percevoir_pnt DOUBLE PRECISION NOT NULL, echeance_reste_pnt DATE NOT NULL, rendre DOUBLE PRECISION NOT NULL, is_paid TINYINT(1) NOT NULL, INDEX IDX_A545421CC3ACDD56 (proprietaire_pnt_id), INDEX IDX_A545421CAB576FA (id_commande_pnt_id), INDEX IDX_A545421C28C4B215 (mode_paiement_pnt_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tble_paiement_frs (id INT AUTO_INCREMENT NOT NULL, proprietaire_paiement_oa_frs_id INT NOT NULL, id_oa_frs_id INT NOT NULL, type_paiement_oa_frs VARCHAR(25) NOT NULL, date_paiement_oa_frs DATE NOT NULL, montant_paye_pnt_oa_frs DOUBLE PRECISION NOT NULL, mode_paiement_pnt_oa_frs INT NOT NULL, num_piece_pnt_oa_frs INT NOT NULL, banque_emetrice_pnt_oa_frs VARCHAR(30) NOT NULL, echeance_pnt_oa_frs DATE NOT NULL, rest_a_payer_pnt_oa_frs DOUBLE PRECISION NOT NULL, echeance_reste_pnt_oa_frs DATE NOT NULL, INDEX IDX_6816112628BFF4B2 (proprietaire_paiement_oa_frs_id), INDEX IDX_68161126910F933F (id_oa_frs_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tble_pole_affaire (id INT AUTO_INCREMENT NOT NULL, pole VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tble_privilege (id INT AUTO_INCREMENT NOT NULL, nom_privilege VARCHAR(30) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tble_privilege_employe (id_employe_id INT NOT NULL, id_privilege_id INT NOT NULL, INDEX IDX_A9EDED113AFF98 (id_privilege_id), PRIMARY KEY(id_employe_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tble_produit (id INT AUTO_INCREMENT NOT NULL, unite_produit_id INT NOT NULL, category_produit_id INT NOT NULL, sous_category_produit_id INT NOT NULL, ligne_de_produit_id INT NOT NULL, introduit_par_id INT NOT NULL, reference VARCHAR(55) NOT NULL, designation_produit VARCHAR(50) NOT NULL, prix_achat_ht_produit DOUBLE PRECISION NOT NULL, taux_marge_produit DOUBLE PRECISION NOT NULL, id_fournisseurs INT NOT NULL, frais_achat_ht DOUBLE PRECISION NOT NULL, tva_produit INT NOT NULL, prix_vente_ht DOUBLE PRECISION NOT NULL, plafond_remise_produit INT NOT NULL, prix_vente_net_ht_produit DOUBLE PRECISION NOT NULL, caracteristiques_produit LONGTEXT NOT NULL, marge_nette_produit DOUBLE PRECISION NOT NULL, taux_de_marque_produit DOUBLE PRECISION NOT NULL, taux_de_marque_reel_produ0 DOUBLE PRECISION NOT NULL, emplacement VARCHAR(50) NOT NULL, vendeur VARCHAR(50) NOT NULL, quantite_en_stock INT NOT NULL, quantite_initiale INT NOT NULL, niveau_de_reapprovisionnement INT NOT NULL, niveau_cible INT NOT NULL, quantite_minimum_de_reapprovisionnement INT NOT NULL, discontinue TINYINT(1) NOT NULL, dimension VARCHAR(15) NOT NULL, finition INT NOT NULL, INDEX IDX_B1C1A13B9063AC0 (unite_produit_id), INDEX IDX_B1C1A13B292A2E85 (category_produit_id), INDEX IDX_B1C1A13B846EBE81 (sous_category_produit_id), INDEX IDX_B1C1A13B7D54D35C (ligne_de_produit_id), INDEX IDX_B1C1A13BDE0D2ED6 (introduit_par_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tble_prospect_client (id INT AUTO_INCREMENT NOT NULL, pris_en_charge_par_id INT NOT NULL, statut_client_id INT NOT NULL, interesse_par_id INT NOT NULL, nature_client VARCHAR(255) NOT NULL, raison_sociale_client VARCHAR(255) NOT NULL, genre_client VARCHAR(255) NOT NULL, nom_client VARCHAR(255) NOT NULL, prenom_client VARCHAR(255) NOT NULL, tel1_client INT NOT NULL, tel2_client INT NOT NULL, email_client LONGTEXT NOT NULL, adresse_client LONGTEXT NOT NULL, nat LONGTEXT NOT NULL, nom_complet LONGTEXT NOT NULL, poste_client LONGTEXT NOT NULL, date_ajout_client DATETIME NOT NULL, matricul_fiscal_client LONGTEXT NOT NULL, fonction_client LONGTEXT NOT NULL, site_web LONGTEXT NOT NULL, date_changement_etat DATETIME NOT NULL, chiffre_affaire DOUBLE PRECISION NOT NULL, origine VARCHAR(30) NOT NULL, nom_recommande_par VARCHAR(50) NOT NULL, prenom_recommande_par VARCHAR(255) NOT NULL, notes_client LONGTEXT NOT NULL, for_sorting LONGTEXT NOT NULL, gouvernorat_client VARCHAR(255) NOT NULL, INDEX IDX_FB0160E897E82DDF (pris_en_charge_par_id), INDEX IDX_FB0160E8B845FCE3 (statut_client_id), INDEX IDX_FB0160E8C0A1349B (interesse_par_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tble_secteur_activite (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tble_settings (id INT AUTO_INCREMENT NOT NULL, gouvernorat_notre_societe_id INT NOT NULL, raison_social_notre_societe VARCHAR(255) NOT NULL, matricul_fiscal VARCHAR(255) NOT NULL, capital DOUBLE PRECISION NOT NULL, tel1 VARCHAR(10) NOT NULL, tel2 VARCHAR(10) NOT NULL, fax VARCHAR(10) NOT NULL, email VARCHAR(255) NOT NULL, site_web VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, afficher_au_demarage TINYINT(1) NOT NULL, premier_devis_notre_societe INT NOT NULL, premiere_facture_notre_societe INT NOT NULL, premier_bl_notre_societe INT NOT NULL, premiere_commande_notre_societe INT NOT NULL, integration_notre_societe VARCHAR(255) NOT NULL, INDEX IDX_F1DC98C72DE12610 (gouvernorat_notre_societe_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tble_sous_categorie_pdt (id INT AUTO_INCREMENT NOT NULL, sous_categorie VARCHAR(20) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tble_statut_commande (id INT AUTO_INCREMENT NOT NULL, statut_commande VARCHAR(50) NOT NULL, ancien_statut VARCHAR(20) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tble_statut_contact (id INT AUTO_INCREMENT NOT NULL, statut VARCHAR(30) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tble_statut_det_commande (id INT AUTO_INCREMENT NOT NULL, statut_det_commande VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tble_statut_ordre_achat (id INT AUTO_INCREMENT NOT NULL, statut_oa VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tble_transporteur (id INT AUTO_INCREMENT NOT NULL, pris_en_charge_par_transporteur INT NOT NULL, date_ajout_transporteur DATE NOT NULL, vehicule_transporteur VARCHAR(255) NOT NULL, nature VARCHAR(25) NOT NULL, raison_social_transporteur VARCHAR(255) NOT NULL, matricule_fiscale_transporteur VARCHAR(255) NOT NULL, nom_complet_transporteur VARCHAR(255) NOT NULL, profession_transporteur VARCHAR(255) NOT NULL, tel1_trp VARCHAR(10) NOT NULL, tel2_trp VARCHAR(10) NOT NULL, email_trp VARCHAR(255) NOT NULL, adresse_trp VARCHAR(255) NOT NULL, gouvernorat_trp INT NOT NULL, notes_trp LONGTEXT NOT NULL, genre VARCHAR(255) NOT NULL, nom_trp VARCHAR(255) NOT NULL, prenom_trp VARCHAR(255) NOT NULL, full_name_trp VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tble_type_frs (id INT AUTO_INCREMENT NOT NULL, type_frs VARCHAR(30) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tble_type_livrable (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tble_type_operation_inventaire (id INT AUTO_INCREMENT NOT NULL, type_action_inventaire VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tble_unite (id INT AUTO_INCREMENT NOT NULL, champ1 VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, username VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE phonenumber ADD CONSTRAINT FK_EFF286D2E7A1254A FOREIGN KEY (contact_id) REFERENCES contact (id)');
        $this->addSql('ALTER TABLE tble_affaire ADD CONSTRAINT FK_45B55F3D7303CE8 FOREIGN KEY (pole_affaire_id) REFERENCES tble_pole_affaire (id)');
        $this->addSql('ALTER TABLE tble_affaire ADD CONSTRAINT FK_45B55F34546CD3F FOREIGN KEY (traiter_par_id) REFERENCES tble_employe (id)');
        $this->addSql('ALTER TABLE tble_affaire ADD CONSTRAINT FK_45B55F3B5AE1119 FOREIGN KEY (code_client_id) REFERENCES tble_prospect_client (id)');
        $this->addSql('ALTER TABLE tble_affaire ADD CONSTRAINT FK_45B55F3B8A86DD8 FOREIGN KEY (apporteur_affaire_aff_id) REFERENCES tble_apporteur_affaires (id)');
        $this->addSql('ALTER TABLE tble_alarmes_rappel_reminders ADD CONSTRAINT FK_667895B650AB9298 FOREIGN KEY (employer_a_rappeler_id) REFERENCES tble_employe (id)');
        $this->addSql('ALTER TABLE tble_alarmes_rappel_reminders ADD CONSTRAINT FK_667895B6F082E755 FOREIGN KEY (affaire_id) REFERENCES tble_affaire (id)');
        $this->addSql('ALTER TABLE tble_apporteur_affaires ADD CONSTRAINT FK_AF3E60DA46766B8C FOREIGN KEY (secteur_activite_app_aff_id) REFERENCES tble_secteur_activite (id)');
        $this->addSql('ALTER TABLE tble_commande_clt ADD CONSTRAINT FK_1688B33844D07D7F FOREIGN KEY (commande_par_id) REFERENCES tble_employe (id)');
        $this->addSql('ALTER TABLE tble_commande_clt ADD CONSTRAINT FK_1688B33883A10B6F FOREIGN KEY (client_commande_id) REFERENCES tble_prospect_client (id)');
        $this->addSql('ALTER TABLE tble_commande_clt ADD CONSTRAINT FK_1688B338CC376B0F FOREIGN KEY (id_affaire_cde_id) REFERENCES tble_affaire (id)');
        $this->addSql('ALTER TABLE tble_commande_clt ADD CONSTRAINT FK_1688B3387167B79D FOREIGN KEY (statut_cde_id) REFERENCES tble_statut_commande (id)');
        $this->addSql('ALTER TABLE tble_commande_clt ADD CONSTRAINT FK_1688B338848D5711 FOREIGN KEY (traiter_par_cde_id) REFERENCES tble_employe1 (id)');
        $this->addSql('ALTER TABLE tble_commande_clt ADD CONSTRAINT FK_1688B338DAA76EDF FOREIGN KEY (id_facture_id) REFERENCES tble_facture1 (id)');
        $this->addSql('ALTER TABLE tble_conge ADD CONSTRAINT FK_2555EC77663D32B6 FOREIGN KEY (id_employe_conge_id) REFERENCES tble_employe (id)');
        $this->addSql('ALTER TABLE tble_depenses ADD CONSTRAINT FK_FAAC36C924B41896 FOREIGN KEY (id_bc_depenses_id) REFERENCES tble_ordre_achat (id)');
        $this->addSql('ALTER TABLE tble_depenses ADD CONSTRAINT FK_FAAC36C9B0B1AA6F FOREIGN KEY (id_affaire_depenses_id) REFERENCES tble_affaire (id)');
        $this->addSql('ALTER TABLE tble_depenses ADD CONSTRAINT FK_FAAC36C9F2919A23 FOREIGN KEY (introduite_par_id) REFERENCES tble_employe (id)');
        $this->addSql('ALTER TABLE tble_depenses ADD CONSTRAINT FK_FAAC36C9768A2117 FOREIGN KEY (id_commande_depenses_id) REFERENCES tble_commande_clt (id)');
        $this->addSql('ALTER TABLE tble_detail_commande ADD CONSTRAINT FK_E4EF5EE6E5220766 FOREIGN KEY (id_commande_det_id) REFERENCES tble_commande_clt (id)');
        $this->addSql('ALTER TABLE tble_detail_commande ADD CONSTRAINT FK_E4EF5EE6C41C4907 FOREIGN KEY (id_produit_det_id) REFERENCES tble_produit (id)');
        $this->addSql('ALTER TABLE tble_detail_commande ADD CONSTRAINT FK_E4EF5EE62323DCD7 FOREIGN KEY (id_statut_det_cde_id) REFERENCES tble_statut_det_commande (id)');
        $this->addSql('ALTER TABLE tble_detail_commande ADD CONSTRAINT FK_E4EF5EE691AF7FC2 FOREIGN KEY (id_ordre_achat_det_id) REFERENCES tble_ordre_achat (id)');
        $this->addSql('ALTER TABLE tble_detail_ordre_achat ADD CONSTRAINT FK_2C79A27860B4C579 FOREIGN KEY (id_ordre_achat_id) REFERENCES tble_ordre_achat (id)');
        $this->addSql('ALTER TABLE tble_detail_ordre_achat ADD CONSTRAINT FK_2C79A278AABEFE2C FOREIGN KEY (id_produit_id) REFERENCES tble_produit (id)');
        $this->addSql('ALTER TABLE tble_devis ADD CONSTRAINT FK_80AABA144546CD3F FOREIGN KEY (traiter_par_id) REFERENCES tble_employe (id)');
        $this->addSql('ALTER TABLE tble_facture ADD CONSTRAINT FK_66E2290C6DCD27D7 FOREIGN KEY (traiter_par_facture_id) REFERENCES tble_employe (id)');
        $this->addSql('ALTER TABLE tble_facture ADD CONSTRAINT FK_66E2290CA1055E25 FOREIGN KEY (id_commande_facture_id) REFERENCES tble_commande_clt (id)');
        $this->addSql('ALTER TABLE tble_facture ADD CONSTRAINT FK_66E2290CEF79D349 FOREIGN KEY (client_facture_id) REFERENCES tble_prospect_client (id)');
        $this->addSql('ALTER TABLE tble_facture ADD CONSTRAINT FK_66E2290C157526B0 FOREIGN KEY (affaire_facture_id) REFERENCES tble_affaire (id)');
        $this->addSql('ALTER TABLE tble_fournisseur ADD CONSTRAINT FK_AB568953C8420049 FOREIGN KEY (pris_en_charge_par_fournisseur_id) REFERENCES tble_employe (id)');
        $this->addSql('ALTER TABLE tble_fournisseur ADD CONSTRAINT FK_AB56895331CF5CEB FOREIGN KEY (type_fournisseur_id) REFERENCES tble_type_frs (id)');
        $this->addSql('ALTER TABLE tble_fournisseur ADD CONSTRAINT FK_AB5689535233A7FC FOREIGN KEY (secteur_activite_id) REFERENCES tble_secteur_activite (id)');
        $this->addSql('ALTER TABLE tble_livrable_attendu ADD CONSTRAINT FK_CC38A648875DE51A FOREIGN KEY (id_affaire_liv_id) REFERENCES tble_affaire (id)');
        $this->addSql('ALTER TABLE tble_livrable_attendu ADD CONSTRAINT FK_CC38A648AF910B2D FOREIGN KEY (proprietaire_liv_id) REFERENCES tble_employe (id)');
        $this->addSql('ALTER TABLE tble_livrable_attendu ADD CONSTRAINT FK_CC38A648C39C3754 FOREIGN KEY (description_liv_id) REFERENCES tble_type_livrable (id)');
        $this->addSql('ALTER TABLE tble_livraison_cde ADD CONSTRAINT FK_3AF4A834651FCC6E FOREIGN KEY (id_commande_livraison_id) REFERENCES tble_commande_clt (id)');
        $this->addSql('ALTER TABLE tble_livraison_cde ADD CONSTRAINT FK_3AF4A8348B43ADE3 FOREIGN KEY (governorat_livraison_id) REFERENCES tble_governorat (id)');
        $this->addSql('ALTER TABLE tble_livraison_cde ADD CONSTRAINT FK_3AF4A834E3B816F1 FOREIGN KEY (transporteur_livraison_id) REFERENCES tble_transporteur (id)');
        $this->addSql('ALTER TABLE tble_operation_inventaire ADD CONSTRAINT FK_CF1ECBA5B3E6B071 FOREIGN KEY (transaction_type_id) REFERENCES tble_type_operation_inventaire (id)');
        $this->addSql('ALTER TABLE tble_operation_inventaire ADD CONSTRAINT FK_CF1ECBA5DE18E50B FOREIGN KEY (product_id_id) REFERENCES tble_produit (id)');
        $this->addSql('ALTER TABLE tble_operation_inventaire ADD CONSTRAINT FK_CF1ECBA5E6D5A2AB FOREIGN KEY (commande_client_id_id) REFERENCES tble_commande_clt (id)');
        $this->addSql('ALTER TABLE tble_ordre_achat ADD CONSTRAINT FK_ECF829B8352F7D4C FOREIGN KEY (fournisseur_id__id) REFERENCES tble_fournisseur (id)');
        $this->addSql('ALTER TABLE tble_ordre_achat ADD CONSTRAINT FK_ECF829B8FC29C013 FOREIGN KEY (cree_par_id) REFERENCES tble_employe1 (id)');
        $this->addSql('ALTER TABLE tble_ordre_achat ADD CONSTRAINT FK_ECF829B8984C5E9F FOREIGN KEY (status_oa_id_id) REFERENCES tble_statut_ordre_achat (id)');
        $this->addSql('ALTER TABLE tble_ordre_achat ADD CONSTRAINT FK_ECF829B858C9F282 FOREIGN KEY (aprouve_par_id) REFERENCES tble_employe (id)');
        $this->addSql('ALTER TABLE tble_ordre_achat ADD CONSTRAINT FK_ECF829B817930DCB FOREIGN KEY (soumise_par_id) REFERENCES tble_employe2 (id)');
        $this->addSql('ALTER TABLE tble_paiement ADD CONSTRAINT FK_A545421CC3ACDD56 FOREIGN KEY (proprietaire_pnt_id) REFERENCES tble_employe (id)');
        $this->addSql('ALTER TABLE tble_paiement ADD CONSTRAINT FK_A545421CAB576FA FOREIGN KEY (id_commande_pnt_id) REFERENCES tble_commande_clt (id)');
        $this->addSql('ALTER TABLE tble_paiement ADD CONSTRAINT FK_A545421C28C4B215 FOREIGN KEY (mode_paiement_pnt_id) REFERENCES tble_mode_paiement (id)');
        $this->addSql('ALTER TABLE tble_paiement_frs ADD CONSTRAINT FK_6816112628BFF4B2 FOREIGN KEY (proprietaire_paiement_oa_frs_id) REFERENCES tble_employe (id)');
        $this->addSql('ALTER TABLE tble_paiement_frs ADD CONSTRAINT FK_68161126910F933F FOREIGN KEY (id_oa_frs_id) REFERENCES tble_ordre_achat (id)');
        $this->addSql('ALTER TABLE tble_privilege_employe ADD CONSTRAINT FK_A9EDEDA43CD245 FOREIGN KEY (id_employe_id) REFERENCES tble_employe (id)');
        $this->addSql('ALTER TABLE tble_privilege_employe ADD CONSTRAINT FK_A9EDED113AFF98 FOREIGN KEY (id_privilege_id) REFERENCES tble_privilege (id)');
        $this->addSql('ALTER TABLE tble_produit ADD CONSTRAINT FK_B1C1A13B9063AC0 FOREIGN KEY (unite_produit_id) REFERENCES tble_unite (id)');
        $this->addSql('ALTER TABLE tble_produit ADD CONSTRAINT FK_B1C1A13B292A2E85 FOREIGN KEY (category_produit_id) REFERENCES tble_categorie_pdt (id)');
        $this->addSql('ALTER TABLE tble_produit ADD CONSTRAINT FK_B1C1A13B846EBE81 FOREIGN KEY (sous_category_produit_id) REFERENCES tble_sous_categorie_pdt (id)');
        $this->addSql('ALTER TABLE tble_produit ADD CONSTRAINT FK_B1C1A13B7D54D35C FOREIGN KEY (ligne_de_produit_id) REFERENCES tble_ligne_de_produits (id)');
        $this->addSql('ALTER TABLE tble_produit ADD CONSTRAINT FK_B1C1A13BDE0D2ED6 FOREIGN KEY (introduit_par_id) REFERENCES tble_employe (id)');
        $this->addSql('ALTER TABLE tble_prospect_client ADD CONSTRAINT FK_FB0160E897E82DDF FOREIGN KEY (pris_en_charge_par_id) REFERENCES tble_employe (id)');
        $this->addSql('ALTER TABLE tble_prospect_client ADD CONSTRAINT FK_FB0160E8B845FCE3 FOREIGN KEY (statut_client_id) REFERENCES tble_statut_contact (id)');
        $this->addSql('ALTER TABLE tble_prospect_client ADD CONSTRAINT FK_FB0160E8C0A1349B FOREIGN KEY (interesse_par_id) REFERENCES tble_produit (id)');
        $this->addSql('ALTER TABLE tble_settings ADD CONSTRAINT FK_F1DC98C72DE12610 FOREIGN KEY (gouvernorat_notre_societe_id) REFERENCES tble_governorat (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE phonenumber DROP FOREIGN KEY FK_EFF286D2E7A1254A');
        $this->addSql('ALTER TABLE tble_alarmes_rappel_reminders DROP FOREIGN KEY FK_667895B6F082E755');
        $this->addSql('ALTER TABLE tble_commande_clt DROP FOREIGN KEY FK_1688B338CC376B0F');
        $this->addSql('ALTER TABLE tble_depenses DROP FOREIGN KEY FK_FAAC36C9B0B1AA6F');
        $this->addSql('ALTER TABLE tble_facture DROP FOREIGN KEY FK_66E2290C157526B0');
        $this->addSql('ALTER TABLE tble_livrable_attendu DROP FOREIGN KEY FK_CC38A648875DE51A');
        $this->addSql('ALTER TABLE tble_affaire DROP FOREIGN KEY FK_45B55F3B8A86DD8');
        $this->addSql('ALTER TABLE tble_produit DROP FOREIGN KEY FK_B1C1A13B292A2E85');
        $this->addSql('ALTER TABLE tble_depenses DROP FOREIGN KEY FK_FAAC36C9768A2117');
        $this->addSql('ALTER TABLE tble_detail_commande DROP FOREIGN KEY FK_E4EF5EE6E5220766');
        $this->addSql('ALTER TABLE tble_facture DROP FOREIGN KEY FK_66E2290CA1055E25');
        $this->addSql('ALTER TABLE tble_livraison_cde DROP FOREIGN KEY FK_3AF4A834651FCC6E');
        $this->addSql('ALTER TABLE tble_operation_inventaire DROP FOREIGN KEY FK_CF1ECBA5E6D5A2AB');
        $this->addSql('ALTER TABLE tble_paiement DROP FOREIGN KEY FK_A545421CAB576FA');
        $this->addSql('ALTER TABLE tble_affaire DROP FOREIGN KEY FK_45B55F34546CD3F');
        $this->addSql('ALTER TABLE tble_alarmes_rappel_reminders DROP FOREIGN KEY FK_667895B650AB9298');
        $this->addSql('ALTER TABLE tble_commande_clt DROP FOREIGN KEY FK_1688B33844D07D7F');
        $this->addSql('ALTER TABLE tble_conge DROP FOREIGN KEY FK_2555EC77663D32B6');
        $this->addSql('ALTER TABLE tble_depenses DROP FOREIGN KEY FK_FAAC36C9F2919A23');
        $this->addSql('ALTER TABLE tble_devis DROP FOREIGN KEY FK_80AABA144546CD3F');
        $this->addSql('ALTER TABLE tble_facture DROP FOREIGN KEY FK_66E2290C6DCD27D7');
        $this->addSql('ALTER TABLE tble_fournisseur DROP FOREIGN KEY FK_AB568953C8420049');
        $this->addSql('ALTER TABLE tble_livrable_attendu DROP FOREIGN KEY FK_CC38A648AF910B2D');
        $this->addSql('ALTER TABLE tble_ordre_achat DROP FOREIGN KEY FK_ECF829B858C9F282');
        $this->addSql('ALTER TABLE tble_paiement DROP FOREIGN KEY FK_A545421CC3ACDD56');
        $this->addSql('ALTER TABLE tble_paiement_frs DROP FOREIGN KEY FK_6816112628BFF4B2');
        $this->addSql('ALTER TABLE tble_privilege_employe DROP FOREIGN KEY FK_A9EDEDA43CD245');
        $this->addSql('ALTER TABLE tble_produit DROP FOREIGN KEY FK_B1C1A13BDE0D2ED6');
        $this->addSql('ALTER TABLE tble_prospect_client DROP FOREIGN KEY FK_FB0160E897E82DDF');
        $this->addSql('ALTER TABLE tble_commande_clt DROP FOREIGN KEY FK_1688B338848D5711');
        $this->addSql('ALTER TABLE tble_ordre_achat DROP FOREIGN KEY FK_ECF829B8FC29C013');
        $this->addSql('ALTER TABLE tble_ordre_achat DROP FOREIGN KEY FK_ECF829B817930DCB');
        $this->addSql('ALTER TABLE tble_commande_clt DROP FOREIGN KEY FK_1688B338DAA76EDF');
        $this->addSql('ALTER TABLE tble_ordre_achat DROP FOREIGN KEY FK_ECF829B8352F7D4C');
        $this->addSql('ALTER TABLE tble_livraison_cde DROP FOREIGN KEY FK_3AF4A8348B43ADE3');
        $this->addSql('ALTER TABLE tble_settings DROP FOREIGN KEY FK_F1DC98C72DE12610');
        $this->addSql('ALTER TABLE tble_produit DROP FOREIGN KEY FK_B1C1A13B7D54D35C');
        $this->addSql('ALTER TABLE tble_paiement DROP FOREIGN KEY FK_A545421C28C4B215');
        $this->addSql('ALTER TABLE tble_depenses DROP FOREIGN KEY FK_FAAC36C924B41896');
        $this->addSql('ALTER TABLE tble_detail_commande DROP FOREIGN KEY FK_E4EF5EE691AF7FC2');
        $this->addSql('ALTER TABLE tble_detail_ordre_achat DROP FOREIGN KEY FK_2C79A27860B4C579');
        $this->addSql('ALTER TABLE tble_paiement_frs DROP FOREIGN KEY FK_68161126910F933F');
        $this->addSql('ALTER TABLE tble_affaire DROP FOREIGN KEY FK_45B55F3D7303CE8');
        $this->addSql('ALTER TABLE tble_privilege_employe DROP FOREIGN KEY FK_A9EDED113AFF98');
        $this->addSql('ALTER TABLE tble_detail_commande DROP FOREIGN KEY FK_E4EF5EE6C41C4907');
        $this->addSql('ALTER TABLE tble_detail_ordre_achat DROP FOREIGN KEY FK_2C79A278AABEFE2C');
        $this->addSql('ALTER TABLE tble_operation_inventaire DROP FOREIGN KEY FK_CF1ECBA5DE18E50B');
        $this->addSql('ALTER TABLE tble_prospect_client DROP FOREIGN KEY FK_FB0160E8C0A1349B');
        $this->addSql('ALTER TABLE tble_affaire DROP FOREIGN KEY FK_45B55F3B5AE1119');
        $this->addSql('ALTER TABLE tble_commande_clt DROP FOREIGN KEY FK_1688B33883A10B6F');
        $this->addSql('ALTER TABLE tble_facture DROP FOREIGN KEY FK_66E2290CEF79D349');
        $this->addSql('ALTER TABLE tble_apporteur_affaires DROP FOREIGN KEY FK_AF3E60DA46766B8C');
        $this->addSql('ALTER TABLE tble_fournisseur DROP FOREIGN KEY FK_AB5689535233A7FC');
        $this->addSql('ALTER TABLE tble_produit DROP FOREIGN KEY FK_B1C1A13B846EBE81');
        $this->addSql('ALTER TABLE tble_commande_clt DROP FOREIGN KEY FK_1688B3387167B79D');
        $this->addSql('ALTER TABLE tble_prospect_client DROP FOREIGN KEY FK_FB0160E8B845FCE3');
        $this->addSql('ALTER TABLE tble_detail_commande DROP FOREIGN KEY FK_E4EF5EE62323DCD7');
        $this->addSql('ALTER TABLE tble_ordre_achat DROP FOREIGN KEY FK_ECF829B8984C5E9F');
        $this->addSql('ALTER TABLE tble_livraison_cde DROP FOREIGN KEY FK_3AF4A834E3B816F1');
        $this->addSql('ALTER TABLE tble_fournisseur DROP FOREIGN KEY FK_AB56895331CF5CEB');
        $this->addSql('ALTER TABLE tble_livrable_attendu DROP FOREIGN KEY FK_CC38A648C39C3754');
        $this->addSql('ALTER TABLE tble_operation_inventaire DROP FOREIGN KEY FK_CF1ECBA5B3E6B071');
        $this->addSql('ALTER TABLE tble_produit DROP FOREIGN KEY FK_B1C1A13B9063AC0');
        $this->addSql('DROP TABLE contact');
        $this->addSql('DROP TABLE phonenumber');
        $this->addSql('DROP TABLE taux_de_commision');
        $this->addSql('DROP TABLE tble_affaire');
        $this->addSql('DROP TABLE tble_alarmes_rappel_reminders');
        $this->addSql('DROP TABLE tble_apporteur_affaires');
        $this->addSql('DROP TABLE tble_categorie_pdt');
        $this->addSql('DROP TABLE tble_commande_clt');
        $this->addSql('DROP TABLE tble_conge');
        $this->addSql('DROP TABLE tble_depenses');
        $this->addSql('DROP TABLE tble_detail_commande');
        $this->addSql('DROP TABLE tble_detail_ordre_achat');
        $this->addSql('DROP TABLE tble_devis');
        $this->addSql('DROP TABLE tble_employe');
        $this->addSql('DROP TABLE tble_employe1');
        $this->addSql('DROP TABLE tble_employe2');
        $this->addSql('DROP TABLE tble_facture');
        $this->addSql('DROP TABLE tble_facture1');
        $this->addSql('DROP TABLE tble_fournisseur');
        $this->addSql('DROP TABLE tble_governorat');
        $this->addSql('DROP TABLE tble_ligne_de_produits');
        $this->addSql('DROP TABLE tble_livrable_attendu');
        $this->addSql('DROP TABLE tble_livraison_cde');
        $this->addSql('DROP TABLE tble_mode_paiement');
        $this->addSql('DROP TABLE tble_operation_inventaire');
        $this->addSql('DROP TABLE tble_ordre_achat');
        $this->addSql('DROP TABLE tble_paiement');
        $this->addSql('DROP TABLE tble_paiement_frs');
        $this->addSql('DROP TABLE tble_pole_affaire');
        $this->addSql('DROP TABLE tble_privilege');
        $this->addSql('DROP TABLE tble_privilege_employe');
        $this->addSql('DROP TABLE tble_produit');
        $this->addSql('DROP TABLE tble_prospect_client');
        $this->addSql('DROP TABLE tble_secteur_activite');
        $this->addSql('DROP TABLE tble_settings');
        $this->addSql('DROP TABLE tble_sous_categorie_pdt');
        $this->addSql('DROP TABLE tble_statut_commande');
        $this->addSql('DROP TABLE tble_statut_contact');
        $this->addSql('DROP TABLE tble_statut_det_commande');
        $this->addSql('DROP TABLE tble_statut_ordre_achat');
        $this->addSql('DROP TABLE tble_transporteur');
        $this->addSql('DROP TABLE tble_type_frs');
        $this->addSql('DROP TABLE tble_type_livrable');
        $this->addSql('DROP TABLE tble_type_operation_inventaire');
        $this->addSql('DROP TABLE tble_unite');
        $this->addSql('DROP TABLE user');
    }
}
