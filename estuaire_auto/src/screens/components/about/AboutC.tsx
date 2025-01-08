import { useContext } from "react"
import { ConfigContext } from "../../Layout"


export default function AboutC() {
  const data = useContext(ConfigContext);
  return (
    <div className="flex flex-col w-full my-24" id="about">
      <div className="flex flex-row justify-center items-center">
        <span className="relative text-2xl font-semibold text-blue after:absolute after:left-0 after:w-full after:scale-x-50 after:border-b-4 after:border-blue after:bottom-0">
            Qui sommes-nous ?
        </span>
      </div>  

      <div className="flex flex-col md:flex-row justify-center px-12 mt-14">

        <div className="flex flex-row justify-center w-full mb-8 md:w-1/2">
          <img src="/assets/about.jpg" className="w-full md:w-[80%] rounded-md" alt="" />
        </div>

        <div className="flex flex-col w-full md:w-1/2">
          <h1 className="text-2xl font-semibold text-blue mb-4 lugrasimo-font">Estuaire Auto,</h1>

          <p className="text-justify">
            {data?.config.description}
          </p>
        </div>
      </div>

    </div>
  )
}
