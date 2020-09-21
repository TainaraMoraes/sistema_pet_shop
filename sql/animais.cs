using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Petshop
{
    #region Animais
    public class Animais
    {
        #region Member Variables
        protected string _nome_animal;
        protected int _id;
        protected string _idade;
        protected string _categoria_animal;
        protected string _raca;
        protected string _dono_animal;
        protected int _telefone;
        protected string _endereco;
        #endregion
        #region Constructors
        public Animais() { }
        public Animais(string nome_animal, string idade, string categoria_animal, string raca, string dono_animal, int telefone, string endereco)
        {
            this._nome_animal=nome_animal;
            this._idade=idade;
            this._categoria_animal=categoria_animal;
            this._raca=raca;
            this._dono_animal=dono_animal;
            this._telefone=telefone;
            this._endereco=endereco;
        }
        #endregion
        #region Public Properties
        public virtual string Nome_animal
        {
            get {return _nome_animal;}
            set {_nome_animal=value;}
        }
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Idade
        {
            get {return _idade;}
            set {_idade=value;}
        }
        public virtual string Categoria_animal
        {
            get {return _categoria_animal;}
            set {_categoria_animal=value;}
        }
        public virtual string Raca
        {
            get {return _raca;}
            set {_raca=value;}
        }
        public virtual string Dono_animal
        {
            get {return _dono_animal;}
            set {_dono_animal=value;}
        }
        public virtual int Telefone
        {
            get {return _telefone;}
            set {_telefone=value;}
        }
        public virtual string Endereco
        {
            get {return _endereco;}
            set {_endereco=value;}
        }
        #endregion
    }
    #endregion
}