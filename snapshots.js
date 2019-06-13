const PercyScript = require('@percy/script');

// A script to navigate our app and take snapshots with Percy.
PercyScript.run(async (page, percySnapshot) => {
  await page.goto( process.env.HEROKU_APP_NAME + '/');
	await page.waitFor(1000);
  await percySnapshot('Home', { widths: [320, 600, 900, 1200] });
});
