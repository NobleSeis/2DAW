export class Validate {
  text(string) {
    return /^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/.test(
      string
    );
  }
  age(number) {
    return /^(1[8-9])$|^([2-5][0-9])$|^(6[0-7])$/.test(number);
  }
  pass(string) {
    // Debe empezar por una vocal minúscula
    if (!/^[aeiou]/.test(string)) {
      return false;
    }

    // Debe contener al menos un número impar
    if (!/[13579]/.test(string)) {
      return false;
    }

    // Debe tener al menos un carácter $&@#
    if (!/[$&@#]/.test(string)) {
      return false;
    }

    // Debe tener al menos un carácter alfabético en mayúscula
    if (!/[A-ZÑ]/.test(string)) {
      return false;
    }

    // No debe contener la palabra select
    if (/select/.test(string)) {
      return false;
    }

    // Al menos 5 caracteres y 12 máximo
    if (!/^.{5,12}$/.test(string)) {
      return false;
    }

    // En este punto la contraseña es válida
    return true;
  }
}
