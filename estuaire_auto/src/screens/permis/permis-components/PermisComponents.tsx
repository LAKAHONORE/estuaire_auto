import { useContext } from "react";
import SingleCategorie from "../../components/single-categorie/SingleCategorie";
import { ConfigContext } from "../../Layout";
import { FormationType, PermisType } from "../../../types/ConfigTypes";

export default function PermisComponents() {
  const data = useContext(ConfigContext);
  return (

      <div className="flex-flex-col px-4 md:px-12 gap-10 my-12">
        <div className="flex flex-row justify-center items-center px-4">
          <span className="relative text-2xl text-center font-semibold text-blue after:absolute after:left-0 after:w-full after:scale-x-50 after:border-b-4 after:border-blue after:bottom-0">
            Passez le permis à <span className="lugrasimo-font">Estuaire Auto</span>
          </span>
        </div>


        <div className="flex w-full justify-center items-center my-24">

          <div className="flex flex-col md:grid grid-cols-3 mx-12 md:mx-0 md:w-[60%] gap-6">


            {
              data?.permis.map((permis: PermisType) => (

                <SingleCategorie
                  img="/assets/permis.jpg"
                  title={permis.name}
                  description={permis.description}
                  link="/single-permis"
                  linkTitle="En savoir plus"
                  object={permis}
                  key={permis.id}
                />
              ))
            }


          </div>

        </div>



        <div className="flex flex-row justify-center items-center px-4">
          <span className="relative text-2xl text-center font-semibold text-blue after:absolute after:left-0 after:w-full after:scale-x-50 after:border-b-4 after:border-blue after:bottom-0">
            Nos Formations Moto
          </span>
        </div>


        <div className="flex w-full justify-center items-center my-24">

          <div className="flex flex-col md:grid grid-cols-3 mx-12 md:mx-0 md:w-[60%] gap-6">


          {
              data?.formations.map((formation: FormationType) => (

                <SingleCategorie
                  img="/assets/permis_moto.jpg"
                  title={formation.name}
                  description={formation.description}
                  link="/single-permis"
                  linkTitle="En savoir plus"
                  object={formation}
                  key={formation.id}
                />
              ))
            }
          </div>

        </div>
      </div>

  )
}