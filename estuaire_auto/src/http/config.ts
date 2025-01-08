import {back} from "../services/back"

type ContactType = {
  name: string,
  tel: string,
  email: string,
  message: string
}

export const httpConfigService = {
  index: async() => {
    const config = await back("/listAll")

    return config
  },

  createContact: async(contact: ContactType) => {
    const {name, tel, email, message} = contact

    const body = new FormData();
    
    body.append('name', name)
    body.append('tel', tel)
    body.append('email', email)
    body.append('message', message)

    const result = await back("/contact/store", {
      method: 'POST',
      body
    })

    return result
  }
}