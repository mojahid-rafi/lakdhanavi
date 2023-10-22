$(document).ready(function () {
  handle();
});


const configsDefault = {
  dataAttrTabName: 'data-tab-to',
  dataAttrTabContentName: 'data-tab-content',
  dataAttrTabDefaultActive: 'data-tab-default-active' };


const handle = (configs = configsDefault) => {
  const {
    dataAttrTabName = configsDefault.dataAttrTabName,
    dataAttrTabContentName = configsDefault.dataAttrTabContentName,
    dataAttrTabDefaultActive = configsDefault.dataAttrTabDefaultActive } =
  configs;

  const tabItems = $(`*[${dataAttrTabName}]`);
  const tabContents = $(`*[${dataAttrTabContentName}]`);

  // Actions
  const addActive = el => el.addClass('active');
  const removeActive = el => el.removeClass('active');
  const addCurrent = el => el.addClass('current');
  const removeCurrent = el => el.removeClass('current');
  const loopAction = func => (targets) =>
  targets.each((index, el) => {
    func($(el));
  });
  const loopActionActive = value => targets => {
    return targets.each((index, el) => {
      const tab = $(el);
      const targetName = tab.attr(dataAttrTabName);
      if (Number(value) > Number(targetName)) {
        addActive(tab);
      } else {
        removeActive(tab);
      }
    });
  };

  // Handle clicked
  const handleClickTab = (tab, tabItems, tabContents) => {
    loopAction(removeCurrent)(tabItems);
    loopAction(removeActive)(tabContents);
    const targetName = tab.attr(dataAttrTabName);
    const targets = $(`*[${dataAttrTabContentName}='${targetName}']`);
    loopActionActive(targetName)(tabItems);
    addCurrent(tab);
    loopAction(addActive)(targets);
    anime({
      targets: targets[0],
      translateY: [200, 0],
      duration: 3000 });

  };

  // First call
  tabItems.each((index, el) => {
    const tab = $(el);
    const isDefautlActive = tab.attr(dataAttrTabDefaultActive);

    tab.click(function () {
      handleClickTab(tab, tabItems, tabContents);
    });

    if (isDefautlActive !== undefined) {
      handleClickTab(tab, tabItems, tabContents);
    }
  });
};