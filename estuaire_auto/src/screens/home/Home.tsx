import AboutC from "../components/about/AboutC";
import CallUs from "../components/call-us/CallUs";
import Prestations from "../components/prestations/Prestations";
import Hero from "./hero/Hero";

export default function Home(){
  return(
    <>
      <Hero />
      <AboutC />
      <Prestations />
      <CallUs />
    </>
  )
}