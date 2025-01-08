import { useContext } from "react";
import { Envelope, Phone, Telephone } from "react-bootstrap-icons";
import { Link } from "react-router-dom";
import { ConfigContext } from "../../Layout";

export default function CallUs() {
  const data = useContext(ConfigContext);
  return (
    <div className="flex flex-col md:flex-row justify-center items-center bg-gradient-to-tr to-blue from-purple my-24">
      <div className="flex flex-col p-4">
        <h1 className="text-2xl text-center text-white font-semibold my-6">Contactez-nous pour tout renseignenment supplémentaire !</h1>

        <div className="flex flex-col md:flex-row justify-center items-center gap-12">
          <Link to={`tel:${data?.config.tel_1}`} className=" flex flex-row justify-center items-center gap-4 bg-white px-6 py-2 hover:scale-105 rounded-tl-full rounded-bl-full rounded-br-full transition-all">
            <Phone className="text-purple"/>
            <span>{data?.config.tel_1}</span>
          </Link>

          <Link to={`tel:${data?.config.tel_2}`} className=" flex flex-row justify-center items-center gap-4 bg-white px-6 py-2 hover:scale-105 rounded-tl-full rounded-bl-full rounded-br-full transition-all">
            <Telephone className="text-purple"/>
            <span>{data?.config.tel_2}</span>
          </Link>


          <Link to={`mailto:${data?.config.email}`} className=" flex flex-row justify-center items-center gap-4 bg-white px-6 py-2 hover:scale-105 rounded-tl-full rounded-bl-full rounded-br-full transition-all">
            <Envelope className="text-purple"/>
            <span>Nous écrire</span>
          </Link>
        </div>
      </div>
    </div>
  )
}
