const Ziggy = {"url":"http:\/\/fbd-vgsales-test.test","port":null,"defaults":{},"routes":{"sanctum.csrf-cookie":{"uri":"sanctum\/csrf-cookie","methods":["GET","HEAD"]},"ignition.healthCheck":{"uri":"_ignition\/health-check","methods":["GET","HEAD"]},"ignition.executeSolution":{"uri":"_ignition\/execute-solution","methods":["POST"]},"ignition.updateConfig":{"uri":"_ignition\/update-config","methods":["POST"]},"home":{"uri":"\/","methods":["GET","HEAD"]},"games.index":{"uri":"games","methods":["GET","HEAD"]},"games.create":{"uri":"games\/create","methods":["GET","HEAD"]},"games.store":{"uri":"games","methods":["POST"]},"games.show":{"uri":"games\/{game}","methods":["GET","HEAD"],"bindings":{"game":"id"}},"games.edit":{"uri":"games\/{game}\/edit","methods":["GET","HEAD"],"bindings":{"game":"id"}},"games.update":{"uri":"games\/{game}","methods":["PUT","PATCH"],"bindings":{"game":"id"}},"games.destroy":{"uri":"games\/{game}","methods":["DELETE"],"bindings":{"game":"id"}}}};

if (typeof window !== 'undefined' && typeof window.Ziggy !== 'undefined') {
    Object.assign(Ziggy.routes, window.Ziggy.routes);
}

export { Ziggy };
