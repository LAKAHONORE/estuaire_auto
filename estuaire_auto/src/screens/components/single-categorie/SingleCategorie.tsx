import { Link } from "react-router-dom"
import { FormationType, PermisType } from "../../../types/ConfigTypes"

type ServiceProps = {
  img: string,
  title: string,
  description: string,
  link: string,
  linkTitle: string,
  object: PermisType | FormationType,
}

export default function SingleCategorie({ img, title, description, link, linkTitle, object }: ServiceProps) {
  return (
    <div className="flex flex-col justify-between items-center shadow-lg hover:shadow-sm hover:scale-105 transition-all hover:shadow-blue mb-12 md:mb-0 rounded-md">
      <div className="flex flex-row mb-6">
        <img src={img} className="rounded-tl-md rounded-tr-md" alt="" />
      </div>
      <h3 className="text-xl font-semibold text-center text-blue mb-6 mx-4">{title}</h3>
          <p className="mx-6 text-center">
              {description}
          </p>
       
      <div className="flex flex-row justify-center items-center">
        <Link to={link} state={object} className="bg-blue px-8 py-3 text-white font-semibold hover:bg-purple transition-all rounded-md my-12">
          {linkTitle}
        </Link>
      </div>
    </div>
  )
}