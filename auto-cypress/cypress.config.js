const { defineConfig } = require("cypress");
const createBundler = require("@bahmutov/cypress-esbuild-preprocessor");
const addCucumberPreprocessorPlugin = require("@badeball/cypress-cucumber-preprocessor").addCucumberPreprocessorPlugin;
const createEsbuildPlugin = require("@badeball/cypress-cucumber-preprocessor/esbuild").createEsbuildPlugin;

module.exports = defineConfig({
  e2e: {
    specPattern: "cypress/e2e/features/*.feature",
    async setupNodeEvents(on, config) {
      // ✅ Garante que config.env existe
      config.env = config.env || {};

      await addCucumberPreprocessorPlugin(on, config, {
        stepDefinitions: "cypress/e2e/step_definitions"
      });

      on("file:preprocessor", createBundler({
        plugins: [createEsbuildPlugin(config)],
      }));

      return config;
    },
  },
});
