import { useLocation } from "react-router-dom";
import CallUs from "../components/call-us/CallUs";
import OldHero from "../components/hero/OldHero";
import SinglePermisC from "./single-permis-c/SinglePermisC";

export default function SinglePermis() {
  const location = useLocation();

  const permis = location.state;
  return (
    <>
      <OldHero title={permis.name} />
      <SinglePermisC />
      <CallUs />
    </>
  )
}
