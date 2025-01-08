async function back(url: string, options?: RequestInit) {
  const baseUrl = "https://estuaireauto.estuaireservices.com/backend/public/api";

  const response = await fetch(baseUrl + url, options)

  if(response.status != 200) {
    const errorMessage = await response.text()

    throw {
      statut: response.status,
      message: errorMessage
    }
  }

  const datas = await response.json()

  if(datas.status != 200) {
    throw {
      statut: datas.status,
      message: datas.msg
    }
  }
  
  return datas
}

export { back }