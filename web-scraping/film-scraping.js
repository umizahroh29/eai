const {Builder, until, By, Capabilities} = require('selenium-webdriver');
const fs = require('fs');
const caps = new Capabilities();

(async function myFunction() {
  let movies = []
  let movieLinks = []
  let driver = await new Builder().withCapabilities(caps).forBrowser('chrome').build();
  let baseUrl = 'https://www.rottentomatoes.com/browse/dvd-streaming-all/'
  try {
    await driver.get(baseUrl).then(function () {
      driver.manage().window().maximize();
      const actions = driver.actions({async: true});
      return driver.findElement(By.className('mb-load-btn')).then(function (webElement) {
        let i = 0
        let timeout = 0
        while (i < 1) {
          timeout += 3000
          actions.move({origin: webElement}).perform();
          webElement.click()

          i++
        }

        return timeout
      }).then(function (timeout) {
        return driver.manage().setTimeouts({implicit: timeout}).then(function () {
          return driver.findElements(By.className('mb-movie')).then(function (elements) {
            let links = []
            elements.forEach(function (element, i) {
              let poster = element.findElement(By.className('poster_container'))
              let a = poster.findElement(By.css('a'))

              links.push(a.getAttribute('href'))
            })

            return links
          }).then(function (links) {
            movieLinks = links
          })
        });
      })
    })

    for (let i = 0; i < movieLinks.length; i++) {
      driver = await new Builder().withCapabilities(caps).forBrowser('chrome').build();
      await driver.get(movieLinks[i]).then(function () {
        driver.manage().setTimeouts({implicit: 0});
        return driver.wait(until.elementLocated(By.className('genre')), 5000).then(function () {
          return driver.findElement(By.className('genre')).isDisplayed()
            .then(function () {
              return driver.findElement(By.className('genre')).getText().then(function (genreText) {
                return genreText
              })
            })
        }).catch(function (e) {
          return "-"
        }).then(function (genreText) {
          return driver.findElement(By.className('mop-ratings-wrap__title')).then(function (title) {
            return title.getText().then(function (titleText) {
              return [genreText, titleText]
            })
          })
        }).then(function (movieInfo) {
          driver.manage().setTimeouts({implicit: 0});
          return driver.wait(until.elementLocated(By.className('mop-ratings-wrap__percentage')), 5000).then(function () {
            return driver.findElement(By.className('mop-ratings-wrap__percentage')).isDisplayed()
              .then(function () {
                return driver.findElement(By.className('mop-ratings-wrap__percentage')).getText().then(function (rateText) {
                  return [movieInfo[0], movieInfo[1], rateText]
                })
              })
          }).catch(function (e) {
            return [movieInfo[0], movieInfo[1], "0"]
          });
        }).then(function (movieInfo) {
          console.log(movieInfo)
          movies.push({genre: movieInfo[0], title: movieInfo[1], rate: movieInfo[2]})
        })
      }).then(function () {
        driver.close()
      })
    }

    let json = JSON.stringify(movies);
    fs.writeFile('movies.json', json, 'utf8', (err) => {
      if (err) throw err;
      console.log('The file has been saved!');
    });
  } catch (e) {
    console.log(e)
    driver.quit()
  }
})();