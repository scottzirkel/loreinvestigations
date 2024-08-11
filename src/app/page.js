import Image from 'next/image'

async function getData(slug) {
  let header = new Headers({
    Authorization: `Bearer ${process.env.WEBSTRIPS_API_TOKEN}`,
    'Content-Type': 'application/json',
  })
  const res = await fetch(`${process.env.WEBSTRIPS_API_URL}/strips`, {
    cache: 'no-store',
    headers: header,
  })

  if (!res.ok) {
    throw new Error('Failed to fetch data')
  }

  return res.json()
}

export default async function Page() {
  const data = await getData()
  const images = Object.values(data.images)

  return (
    <main>
      <div className="mt-8">
        {images.map((image, index) => (
          <Image key={image.uuid} src={image.original_url} width={1200} height={1200} alt={data.title} loading={index > 0 ? 'lazy' : 'eager'} />
        ))}
      </div>
    </main>
  )
}
