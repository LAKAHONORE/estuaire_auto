import { useState } from "react";
import { httpConfigService } from "../../../http/config";

export default function ContactsC() {

  const [name, setName] = useState('');
  const [email, setEmail] = useState('');
  const [tel, setTel] = useState('');
  const [message, setMessage] = useState('');
  const [disabledBtn, setDisabledBtn] = useState(false);
  const [isVisible, setIsVisible] = useState(false);


  const showModal = () => {
    setIsVisible(true); // Afficher la div
    setTimeout(() => {
      setIsVisible(false); // Cacher la div après 3 secondes
    }, 3000);
  }

  const handleClick = async (e: React.FormEvent<HTMLFormElement>) => {
    e.preventDefault();

    setDisabledBtn(true) // Désactivation du bouton
    setTimeout(() => {
      setDisabledBtn(false);
    }, 3000);

    const formData = {
      name,
      email,
      tel,
      message
    }

    try {
      const response = await httpConfigService.createContact(formData);

      showModal()
      console.log(response)

      setName('');
      setEmail('');
      setTel('');
      setMessage('');

    } catch (e) {
      console.log(e)
      alert("Veuillez renseigner tous les champs!")
    }

  };




  return (
    <div className="flex-flex-col px-4 md:px-12 gap-10 my-12">
      <div className="flex flex-row justify-center items-center px-4">
        <span className="relative text-2xl text-center font-semibold text-blue after:absolute after:left-0 after:w-full after:scale-x-50 after:border-b-4 after:border-blue after:bottom-0">
          Contacts
        </span>
      </div>



      <div className="flex w-full justify-center items-center my-24">
        <div className="flex flex-row w-full">
          <form onSubmit={handleClick} className="border-1 border-blue w-full md:w-1/2 bg-gray-300 p-10 rounded-md" autoComplete="off">
            <legend className="text-xl font-semibold text-blue my-16">Formulaire de contact</legend>


            {
              isVisible && (
                <div className="flex flex-row justify-center items-center bg-green-300 py-4 mx-12 my-6 rounded-md animate__animated animate__slideInLeft">
                  <h1 className="font-semibold">Demande enregistrée avec succès !</h1>
                </div>
              )
            }

            <div className="flex flex-col">
              <label className="font-semibold">
                Nom complet / Raison sociale
              </label>
              <input type="text" value={name} onChange={(e) => setName(e.target.value)} className="py-3 px-4 outline-none bg-gray-800 text-white font-semibold rounded-md" placeholder="John Doe / Brasseries du cameroun" />
            </div>

            <div className="flex flex-col my-10">
              <label className="font-semibold">
                Numéro de téléphone
              </label>
              <input type="tel" value={tel} onChange={(e) => setTel(e.target.value)} className="py-3 px-4 outline-none bg-gray-800 text-white font-semibold rounded-md" placeholder="698789888" />
            </div>

            <div className="flex flex-col my-10">
              <label className="font-semibold">
                Adresse Email
              </label>
              <input type="text" value={email} onChange={(e) => setEmail(e.target.value)} className="py-3 px-4 outline-none bg-gray-800 text-white font-semibold rounded-md" placeholder="johndoe@gmail.com" />
            </div>


            <div className="flex flex-col">
              <label className="font-semibold">
                Message personnalisé
              </label>

              <textarea value={message} onChange={(e) => setMessage(e.target.value)} rows={4} className="bg-gray-800 text-white py-3 px-4 font-semibold rounded-md" placeholder="Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga in veniam.">

              </textarea>
            </div>


            <div className="flex flex-row justify-center items-center my-10">
              <button type="submit" onClick={() => handleClick} className="bg-blue px-16 py-2 text-white font-semibold rounded-md hover:bg-purple transition-all" disabled={disabledBtn}>
                {disabledBtn ? 'Veuillez patienter ...' : 'Enregistrer !'}
              </button>
            </div>



          </form>

          <div className="hidden md:flex w-1/2">
            <img src="/assets/about.jpg" alt="" />
          </div>
        </div>
      </div>




    </div>
  )
}
