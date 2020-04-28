<?php
/**
 * @Entity
 * @Table(name="public.user")
 */
class Usuario {
    /** 
    * @Id
    * @Column(name="id", type="bigint") 
    * @GeneratedValue(strategy="SEQUENCE")
    * @SequenceGenerator(sequenceName="seq_id_user")
    */
    private $id;

    /** 
    * @Column(name="name", type="string") 
    */
    private $nome;
   
    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function getNome() {
        return $this->nome;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }
}
?>