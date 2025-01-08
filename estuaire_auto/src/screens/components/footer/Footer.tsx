import { ChevronRight, Geo, PhoneFill } from "react-bootstrap-icons";
import { Link } from "react-router-dom";

export default function Footer() {
  return (
    <div className="flex flex-col bg-gray-300">
      <div className="flex flex-col md:grid grid-cols-3 px-6 md:px-12">
        <div className="flex flex-col my-6">
          <div className="flex flex-row justify-start items-center my-3 gap-2">
            <img src="/assets/logo_estuaire_auto.png" className="w-20" alt="" />
            <span className="lugrasimo-font text-xl">Estuaire Auto</span>
          </div>

          <div className="flex flex-row justify-start items-center my-3 gap-3">
            <Geo className="text-xl text-blue" />
            <span>
              Bafoussam : Situé à la 2e Rue Tamdja 100m après Camtel <br />
              Douala, Ndogbon Entrée IUT
            </span>
          </div>

          <div className="flex flex-row justify-start items-center my-3 gap-3">
            <PhoneFill className="text-xl text-blue" />
            <span>
              Bafoussam : 698 523 672 / 674 968 980
            </span>
          </div>

          <div className="flex flex-row justify-start items-center my-3 gap-3">
            <PhoneFill className="text-xl text-blue" />
            <span>
              Douala :  698 550 451
            </span>
          </div>
        </div>


        <div className="flex flex-col my-6">
          <h1 className="my-3">
            <span className="relative text-2xl font-semibold text-blue after:absolute after:left-0 after:w-full after:scale-x-50 after:border-b-4 after:border-blue after:bottom-0">
              Liens Utiles
            </span>
          </h1>

          <ul>
            <li className="my-3">
              <Link to="/" className="flex flex-row justify-start items-center gap-3 hover:text-blue transition-all">
                <ChevronRight className="text-xl text-blue" />
                <span>Accueil</span>
              </Link>
            </li>

            <li className="my-3">
              <Link to="/permis" className="flex flex-row justify-start items-center gap-3 hover:text-blue transition-all">
                <ChevronRight className="text-xl text-blue" />
                <span>Nos Permis</span>
              </Link>
            </li>

            <li className="my-3">
              <Link to="/contacts" className="flex flex-row justify-start items-center gap-3 hover:text-blue transition-all">
                <ChevronRight className="text-xl text-blue" />
                <span>Contacts</span>
              </Link>
            </li>

          </ul>
        </div>


        <div className="flex flex-col my-6">
          <h1 className="my-3">
            <span className="relative text-2xl font-semibold text-blue after:absolute after:left-0 after:w-full after:scale-x-50 after:border-b-4 after:border-blue after:bottom-0">
              Autres services
            </span>
          </h1>

          <ul>
            <li className="my-3">
              <Link to="https://learning.estuaireservices.com/" target="_blank" className="flex flex-row justify-start items-center gap-3 hover:text-blue transition-all">
                <ChevronRight className="text-xl text-blue" />
                <span>Estuaire Learning</span>
              </Link>
            </li>

            <li className="my-3">
              <Link to="https://estuaireemploi.com/" target="_blank" className="flex flex-row justify-start items-center gap-3 hover:text-blue transition-all">
                <ChevronRight className="text-xl text-blue" />
                <span>Estuaire Emploi</span>
              </Link>
            </li>

            <li className="my-3">
              <Link to="https://estuaireachats.com/" target="_blank" className="flex flex-row justify-start items-center gap-3 hover:text-blue transition-all">
                <ChevronRight className="text-xl text-blue" />
                <span>Estuaire Achats</span>
              </Link>
            </li>

            <li className="my-3">
              <Link to="https://imes.estuaireservices.com/" target="_blank" className="flex flex-row justify-start items-center gap-3 hover:text-blue transition-all">
                <ChevronRight className="text-xl text-blue" />
                <span>Immobilier de l'estuaire</span>
              </Link>
            </li>

            <li className="my-3">
              <Link to="https://radioestuaire.estuaireservices.com/" target="_blank" className="flex flex-row justify-start items-center gap-3 hover:text-blue transition-all">
                <ChevronRight className="text-xl text-blue" />
                <span>Radio de l'estuaire</span>
              </Link>
            </li>
          </ul>
        </div>
      </div>

      <div className="flex flex-row w-full justify-center md:justify-start text-white font-semibold items-center gap-1 h-10 bg-blue px-12">
          <span>
            Designed By 
          </span>
          <Link to="#" className="fwd-font">
            fwd
          </Link>
      </div>
    </div>

  )
}