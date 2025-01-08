import Navbar from './components/navbar/Navbar'
import Footer from './components/footer/Footer'
import { Outlet } from 'react-router-dom'
import { ConfigType, FormationType, PermisType } from '../types/ConfigTypes'
import { createContext, useEffect, useState } from 'react'
import { httpConfigService } from '../http/config'


type Context = {
  permis: PermisType[],
  formations: FormationType[],
  config: ConfigType
}

const ConfigContext = createContext<Context | null>(null);

export {ConfigContext}

export default function Layout() {
    const [config, setConfig] = useState<Context | null>(null);

    useEffect(() =>{
        httpConfigService.index().then((data)=>{
          setConfig(data)
        })
    }, [])


  return (
   <ConfigContext.Provider value={config}>
    <Navbar />
    <Outlet />
    <Footer />
   </ConfigContext.Provider>
  )
}
