
import { useContext, useState } from "react";
import { List, XLg } from "react-bootstrap-icons";
import { NavLink } from "react-router-dom";
import { ConfigContext } from "../../Layout";

export default function Navbar() {
  const [mobileNav, setMobileNav] = useState(false);
  const data = useContext(ConfigContext);


  return (
    <>
      <nav
        className="flex flex-row justify-between items-center h-16 top-0 z-20 sticky w-full bg-gray-300 px-6 md:px-12 shadow-lg"
      >
        <NavLink to="/" className="flex flex-row justify-center items-center gap-2">
          <img src="/assets/logo_estuaire_auto.png" alt="logo" className="w-12" />
          <span className="lugrasimo-font font-bold">Estuaire Auto</span>
        </NavLink>


        <ul className="hidden md:flex flex-row justify-center items-center gap-8">
          <li className="font-semibold text-blue transition-all">
            <NavLink to="/" >
              Accueil
            </NavLink>
          </li>

          <li className="font-semibold hover:text-blue transition-all">
            <NavLink to="/permis" >
              Nos Permis
            </NavLink>
          </li>


          <li className="font-semibold hover:text-blue transition-all">
            <NavLink to="/contacts" >
              Contacts
            </NavLink>
          </li>


          <li >
            <NavLink to={`${data?.config.boutique_link}`} target="_blank" className="font-semibold text-white bg-blue px-4 py-3 hover:bg-purple rounded-md transition-all">
              Passer une commande
            </NavLink>
          </li>

        </ul>


        <div className="md:hidden" onClick={() => setMobileNav(!mobileNav)}>
          {
            mobileNav ? (
              <XLg className="text-xl text-blue" />
            ) : (
              <List className="text-xl text-blue" />
            )
          }
        </div>



        <div className={`md:hidden fixed top-16 bg-gray-300 left-0 h-dvh px-8 py-8 ${mobileNav ? 'w-full' : 'left-[100%] w-0 opacity-0'} animate__animated animate__slideInLeft duration-200`}>
          <ul className="md:hidden flex flex-col justify-start items-start gap-8">
            <li className="font-semibold text-blue transition-all">
              <NavLink to="/" >
                Accueil
              </NavLink>
            </li>

            <li className="font-semibold hover:text-blue transition-all">
            <NavLink to="/permis" >
              Nos Permis
            </NavLink>
            </li>


            <li className="font-semibold hover:text-blue transition-all">
              <NavLink to="/contacts" >
                Contacts
              </NavLink>
            </li>

            <li >
            <NavLink to={`${data?.config.boutique_link}`} target="_blank" className="font-semibold text-white bg-blue px-4 py-3 hover:bg-purple rounded-md transition-all">
              Passer une commande
            </NavLink>
          </li>
          </ul>
        </div>

      </nav>


    </>
  )
}