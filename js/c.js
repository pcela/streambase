(async () => {
        const getParentAnchors = (elem) => {
          const parentAnchors = [];
          for (let current = elem; current; current = current.parentElement) {
            if (current.nodeName === "A") parentAnchors.push(current);
          }
          return parentAnchors;
        };

        const request = async (type, key) =>
          fetch(`https://api.countapi.xyz/${type}/streambase171121/${key}`)
            .then((res) => res.json())
            .then((res) => res.value || 0)
            .catch(() => 0);

        const hit = async (key) => request("hit", key);
        const getHits = async (key) => request("get", key);

        const registerHit = async (key) => {
          await hit(key);

          // l
          const sourceElem = document.querySelector(`#${key}_clicks`);
          sourceElem.innerHTML = await getHits(key);
        };

        window.addEventListener("click", (e) => {
          const parentAnchors = getParentAnchors(e.target);
          const alreadyRegistered = new Set();
          parentAnchors.forEach((anchor) => {
            const key = anchor.getAttribute("data-key");
            if (!key || alreadyRegistered.has(key)) return;
            alreadyRegistered.add(key);
            registerHit(key);
          });
        });

        window.addEventListener("auxclick", (e) => {
          if (e.button !== 1) return;
          const parentAnchors = getParentAnchors(e.target);
          const alreadyRegistered = new Set();
          parentAnchors.forEach((anchor) => {
            const key = anchor.getAttribute("data-key");
            if (!key || alreadyRegistered.has(key)) return;
            alreadyRegistered.add(key);
            registerHit(key);
          });
        });

        // l
        window.onload = () =>
          ["pppa", "ppp"].forEach(async (key) => {
            const elem = document.querySelector(`#${key}_clicks`);
            if (elem) elem.innerHTML = await getHits(key);
          });
      })();