import { createBrowserRouter } from "react-router-dom";
import Home from "../src/screens/home/Home";
import Permis from "../src/screens/permis/Permis";
import SinglePermis from "../src/screens/single-permis/SinglePermis";
import NotFound from "../src/screens/404/NotFound";
import Contacts from "../src/screens/contacts/Contacts";
import Layout from "../src/screens/Layout";

const router = createBrowserRouter([
  {
    path : "/",
    element: <Layout />,
    children : [
      {
        index: true,
        element : <Home />  
      },
      {
        path : "/permis",
        element : <Permis />
      },
      {
        path: "/single-permis",
        element : <SinglePermis />
      },
      {
        path: "/contacts",
        element: <Contacts />
      },
    
    
      {
        path: "*",
        element: <NotFound /> 
      }

    ]
  },  



]);

export default router;