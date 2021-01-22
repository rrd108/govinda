const recepies = document.getElementById('recepies')

fetch('https://krisna.hu/wp-json/wp/v2/posts?categories=31&per_page=3&_fields=id,link,title.rendered,content.rendered')
  .then(response => response.json())
  .then(data => {
    data.forEach((recepie) => {
      const hasHyphen = recepie.title.rendered.substr(0, recepie.title.rendered.indexOf('&#8211;'))
      let name = hasHyphen ? recepie.title.rendered.substr(0, recepie.title.rendered.indexOf('&#8211;')) : recepie.title.rendered
      // 8 chars is space + &#8211; + space
      let description = hasHyphen ? recepie.title.rendered.substr(recepie.title.rendered.indexOf('&#8211;') + 8) : '&nbsp;'

      let picture = recepie.content.rendered.match(/<img\b(?=\s)(?=(?:[^>=]|='[^']*'|="[^"]*"|=[^'"][^\s>]*)*?\ssrc=['"]([^"]*)['"]?)(?:[^>=]|='[^']*'|="[^"]*"|=[^'"\s]*)*"\s?\/?>/)

      recepies.innerHTML += `<div>
        <img loading="lazy" src="${picture[1]}" alt="${name}">
        <h3>${name}</h3>
        <p>${description}</p>
        <a href="${recepie.link}" class="button">Recept »</a>
      </div>`
    })
  })