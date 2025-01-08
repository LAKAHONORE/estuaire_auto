import React from "react";

interface HeroProps {
  img: string,
  title: string

}
const Hero: React.FC<HeroProps> = ({ img, title }) => {
  return (
    <section className="flex flex-col md:flex-row justify-center md:justify-center items-center w-full h-[600px] px-3 md:px-12 bg-no-repeat object-left-top" style={{ background: `url(${img})`, backgroundAttachment: "right" }}>
      <div className="flex flex-col w-full md:w-1/2 justify-center items-center">
        <span className="text-white mt-6 text-xl font-bold text-center animate__animated animate__bounce">
          Accueil / {title} 
        </span>
      </div>
    </section>
  )
}

export default Hero;