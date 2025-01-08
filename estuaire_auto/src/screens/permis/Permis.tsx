import CallUs from "../components/call-us/CallUs";
import OldHero from "../components/hero/OldHero";
import PermisComponents from "./permis-components/PermisComponents";

export default function Permis() {
  return (
    <>
       <OldHero title="Accueil / Nos permis" />
       <PermisComponents />
       <CallUs />
    </>
  )
}
