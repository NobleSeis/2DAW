export class Validate {
  text(string) {
    return /^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/.test(
      string
    );
  }
  age(number) {
    return /^(1[8-9]){1}|([2-5][0-9]){1}|(6[0-7]){1}$/.test(number);
  }
}
