import { Link } from "react-router-dom";

export default function Hero(){
  return(
    <section className="flex flex-col md:flex-row justify-center md:justify-between items-center w-full h-[600px] px-3 md:px-12 bg-gray-800 from-gray-800 to-gray-900">
        <div className="flex flex-col w-full md:w-1/2 justify-center items-center md:justify-start md:items-start">
          <h1 className="lugrasimo-font text-2xl md:text-5xl text-white animate__animated animate__bounce">Estuaire Auto</h1>
          <span className="text-white mt-6 text-sm md:text-xl text-center md:text-start ">
          Nous vous offrons une formation de qualité, du nettoyage des concepts théoriques à la maîtrise de la route.
           Avec notre équipe dédiée, la route vers votre permis devient un parcours agréable et efficace.
          </span>

          <div className="flex flex-row justify-start items-center gap-8 mt-10">
            <Link to="/permis" className="bg-blue py-4 px-8 text-white font-semibold rounded-md animate-pulse">
              En savoir plus
            </Link>
          </div>
        </div>

        <div className="flex flex-col justify-center items-center mt-12 ">
          <img src="/assets/hero_svg_2.png" className="w-[80%] animate-bounce" alt="" />
        </div>
    </section>
  )
}