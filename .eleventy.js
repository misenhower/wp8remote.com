module.exports = function(eleventyConfig) {
  eleventyConfig.addPassthroughCopy("web/images");
  eleventyConfig.addPassthroughCopy("web/css");
  eleventyConfig.addPassthroughCopy("web/js");
  eleventyConfig.addPassthroughCopy("web/favicon.ico");

  return {
    dir: {
      input: "web",
      output: "dist"
    },
    passthroughFileCopy: true
  };
};
