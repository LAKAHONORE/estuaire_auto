type Props = {
  title : string
}

export default function OldHero({ title }: Props) {
  return (
    <section className="flex flex-col md:flex-row justify-center md:justify-start items-center w-full h-[200px] inset-0 bg-gradient-to-t from-gray-800 to-gray-900 px-3 md:px-12">
        <span className="text-2xl text-white font-semibold animate__animated animate__bounce">{title}</span>
    </section>
  )
}